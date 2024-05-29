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

    public function store(Request $request)
    {
        // store the skills to database 
        $freelancerId = Auth::id();

        FreelancerSkill::create([
            'freelancer_id' => $freelancerId,
            'skill_id' => $request->skill_id,
        ]);
        return redirect('/dashboard/freelancer');
    }
    public function remove($id)
    {
        $skill = Skill::findOrFail($id);
        return view('skill.destroy', compact('skill'));
    }
    public function destroy($id)
    {
        $freelancerId = Auth::id();

        FreelancerSkill::where('freelancer_id', $freelancerId)->where('skill_id', intval($id))->delete();
        return redirect('/dashboard/freelancer');
    }
}
