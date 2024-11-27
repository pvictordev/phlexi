<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use App\Models\FreelancerSkill;
use App\Models\Review;
use App\Models\Project;
use Illuminate\Http\Request;

// get the authenticated freelancer
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Cache;

// class FreelancerController extends Controller
// {
//     public function index()
//     {
//         $freelancers = Freelancer::with('user')->get();
//         $freelancerSkill = Freelancer::with('skill')->get();

//         return view('freelancer.freelancers', [
//             'freelancers' => $freelancers,
//             'freelancerSkill' => $freelancerSkill
//         ]);
//     }

//     public function show($id)
//     {
//         $freelancer = Freelancer::with('user')->where('freelancer_id', $id)->firstOrFail();
//         $freelancerSkill = Freelancer::with('skill')->find($id);
//         $reviews = Review::where('freelancer_id', $id)->get();

//         return view('freelancer.show', [
//             'freelancer' => $freelancer,
//             'freelancerSkill' => $freelancerSkill,
//             'reviews' => $reviews
//         ]);
//     }

//     public function edit($id)
//     {
//         $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();

//         return view('freelancer.edit', compact('freelancer'));
//     }

//     public function update(Request $request, $id)
//     {
//         $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();
//         // Update the attributes
//         $freelancer->hourly_rate = intval($request->rate);
//         $freelancer->availability = intval($request->availability);
//         $freelancer->niche = $request->niche;
//         $freelancer->bio = $request->bio;

//         // Save the updated freelancer
//         $freelancer->save();

//         // Redirect to the dashboard or any other page
//         return redirect('/dashboard/freelancer')->with('success', 'Freelancer info successfully updated');
//     }
// }

class FreelancerController extends Controller
{
    public function index()
    {
        // Cache freelancers with associated user and skills for 1 hour
        $freelancers = Cache::remember('freelancers', 3600, function () {
            return Freelancer::with('user')->get();
        });

        $freelancerSkill = Cache::remember('freelancer_skills', 3600, function () {
            return Freelancer::with('skill')->get();
        });

        return view('freelancer.freelancers', [
            'freelancers' => $freelancers,
            'freelancerSkill' => $freelancerSkill
        ]);
    }

    public function show($id)
    {
        // Cache specific freelancer data with user, skills, and reviews
        $freelancer = Cache::remember("freelancer_{$id}", 3600, function () use ($id) {
            return Freelancer::with('user')->where('freelancer_id', $id)->firstOrFail();
        });

        $freelancerSkill = Cache::remember("freelancer_skill_{$id}", 3600, function () use ($id) {
            return Freelancer::with('skill')->find($id);
        });

        $reviews = Cache::remember("freelancer_reviews_{$id}", 3600, function () use ($id) {
            return Review::where(
                'freelancer_id',
                $id
            )->get();
        });

        return view('freelancer.show', [
            'freelancer' => $freelancer,
            'freelancerSkill' => $freelancerSkill,
            'reviews' => $reviews
        ]);
    }

    public function edit($id)
    {
        // Fetch freelancer data without caching for editing
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();

        return view('freelancer.edit', compact('freelancer'));
    }

    public function update(Request $request, $id)
    {
        // Find and update freelancer
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();
        $freelancer->hourly_rate = intval($request->rate);
        $freelancer->availability = intval($request->availability);
        $freelancer->niche = $request->niche;
        $freelancer->bio = $request->bio;
        $freelancer->save();

        // Clear caches related to freelancers
        Cache::forget('freelancers');
        Cache::forget('freelancer_skills');
        Cache::forget("freelancer_{$id}");
        Cache::forget("freelancer_skill_{$id}");
        Cache::forget("freelancer_reviews_{$id}");

        // Redirect with success message
        return redirect('/dashboard/freelancer')->with('success', 'Freelancer info successfully updated');
    }
}
