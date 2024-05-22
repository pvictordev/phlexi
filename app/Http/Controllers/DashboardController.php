<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Freelancer;
use App\Models\Project;
use App\Models\FreelancerSkill;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = Auth::id();
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'bio' => $user->bio
        ];

        $freelancer = Freelancer::where('freelancer_id', $userId)->first();
        $freelancerData = [
            'freelancer_id' => $userId,
            'hourly_rate' => $freelancer->hourly_rate,
            'availability' => $freelancer->availability
        ];

        $projectsData = Project::where('client_id', $userId)->with('category')->get();

        $freelancerSkills = FreelancerSkill::with('skill')->where('freelancer_id', $userId)->get();

        $reviewsLeft = Review::where('freelancer_id', $userId)->get();
        $reviewsReceived = Review::where('client_id', $userId)->get();
        // dd($reviewsReceived);

        return view('dashboard', [
            'userData' => $userData,
            'freelancerData' => $freelancerData,
            'projectsData' => $projectsData,
            'freelancerSkills' => $freelancerSkills,
            'reviewsReceived' => $reviewsReceived,
            'reviewsLeft' => $reviewsLeft,
        ]);
    }
}
