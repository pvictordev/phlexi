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
use App\Models\User;

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = Freelancer::with('user')->get();
        $freelancerSkill = Freelancer::with('skill')->get();

        return view('freelancer.freelancers', [
            'freelancers' => $freelancers,
            'freelancerSkill' => $freelancerSkill
        ]);
    }


    // optimize and symplify this method in order to get the related table User, from Freelancer, without having the need to fetch both tables directly
    public function show($id)
    {
        $freelancer = Freelancer::with('user')->where('freelancer_id', $id)->firstOrFail();
        $freelancerSkill = Freelancer::with('skill')->find($id);
        $reviews = Review::where('freelancer_id', $id)->get();

        return view('freelancer.show', [
            'freelancer' => $freelancer,
            'freelancerSkill' => $freelancerSkill,
            'reviews' => $reviews
        ]);
    }

    public function edit($id)
    {
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();

        return view('freelancer.edit', compact('freelancer'));
    }

    public function update(Request $request, $id)
    {
        $freelancer = Freelancer::where('freelancer_id', $id)->firstOrFail();
        // Update the attributes
        $freelancer->hourly_rate = intval($request->rate);
        $freelancer->availability = intval($request->availability);

        // Save the updated freelancer
        $freelancer->save();

        // Redirect to the dashboard or any other page
        return redirect('/dashboard');
    }
}
