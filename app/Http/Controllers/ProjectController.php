<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// get the authenticated user
use Illuminate\Support\Facades\Auth;

// import the models
use App\Models\Project;
use App\Models\User;
use App\Models\Category;

class ProjectController extends Controller
{
    // view method
    public function edit()
    {
        return view('project.edit');
    }
    public function update()
    {
    }
    public function show()
    {
        // get the categories
        dd('show projects');
    }
    // view method
    public function create()
    {
        // get the categories
        $categories = Category::all();
        return view('project.create', ['categories' => $categories]);
    }
    public function store(Request $request, Project $project, User $user)
    {

        $client_id = Auth::id();

        $project->client_id = $client_id;
        $project->category_id = intval($request->category_id);
        $project->description = $request->description;
        $project->price = $request->price;
        $project->status = $request->status;

        $project->save();

        return redirect('/dashboard');
    }
}
