<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// get the authenticated user
use Illuminate\Support\Facades\Auth;

// import the models
use App\Models\Project;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index()
    {
        // show all the projects
        $categories = Category::all();
        $projects = Project::where('status', 'active')->get();
        return view('market', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
    // show projects of a prticular category 
    public function category($id)
    {
        $categories = Category::all();
        $projects = Project::where('category_id', $id)->where('status', 'active')->get();
        return view('market', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    // view method
    public function create()
    {
        // get the categories
        $categories = Category::all();
        return view('project.create', ['categories' => $categories]);
    }
    public function store(Request $request, Project $project)
    {

        $client = Auth::user();

        $project = new Project();

        // Associate the client with the project
        $project->client()->associate($client);

        $project->category_id = $request->category_id;

        $project->title = $request->title;
        $project->description = $request->description;
        $project->price = $request->price;
        $project->status = $request->status;

        // Save the project
        $project->save();

        return redirect('/dashboard/client');
    }

    // view method
    public function edit($id, Category $categories)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all();
        return view('project.edit', compact('project', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $client = Auth::id();
        // Validate the request data
        $request->validate([
            // 'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        $project = Project::findOrFail($id);

        $project->category_id = intval($request->category_id);
        $project->client_id = $client;
        $project->price = $request->price;
        $project->status = $request->status;
        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect('/dashboard/client');
    }
    public function destroy($id)
    {
        Project::where('id', $id)->delete();
        return redirect('/dashboard/client');
    }
}
