<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// models
use App\Models\FreelancerSkill;
use App\Models\Skill;

class FreelancerSkillController extends Controller
{
    //
    public function create()
    {
        // show all the skills
        $skills = Skill::all();
        return view('skill.create', ['skills' => $skills]);
    }

    public function store(Request $request, FreelancerSkill $freelancerSkill)
    {
        // store the skills to database 
        $freelancerId = Auth::id();

        // $freelancerSkill = new FreelancerSkill();

        // $freelancerSkill->freelancer_id = $freelancerId;

        // $freelancerSkill->freelancer_id = intval($requset->skill_id);
        // $freelancerSkill->save();
        FreelancerSkill::create([
            'freelancer_id' => $freelancerId,
            'skill_id' => $request->skill_id,
        ]);
    }
    // public function store(Request $request, Project $project, User $user)
    // {

    //     $client = Auth::user();

    //     $project = new Project();

    //     // Associate the client with the project
    //     $project->client()->associate($client);

    //     $project->category_id = $request->category_id;

    //     $project->description = $request->description;
    //     $project->price = $request->price;
    //     $project->status = $request->status;

    //     // Save the project
    //     $project->save();

    //     return redirect('/dashboard');
    // }
}
