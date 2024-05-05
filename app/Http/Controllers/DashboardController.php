<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Client;
use App\Models\Freelancer;
use App\Models\Project;
use App\Models\Skill;
use App\Models\FreelancersSkill;
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
            'hourly_rate' => $freelancer->hourly_rate,
            'availability' => $freelancer->availability
        ];

        $projectsData = Project::where('client_id', $userId)->get();

        $freelancerSkills = FreelancersSkill::with('skill')->where('freelancer_id', $userId)->get();

        return view('dashboard', [
            'userData' => $userData,
            'freelancerData' => $freelancerData,
            'projectsData' => $projectsData,
            'freelancerSkills' => $freelancerSkills
        ]);
    }
}
