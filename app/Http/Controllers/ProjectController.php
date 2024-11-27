<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// get the authenticated user
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Cache;


// import the models
use App\Models\Project;
use App\Models\Category;

// class ProjectController extends Controller
// {
//     public function index()
//     {
//         // show all the projects
//         $categories = Category::all();
//         $projects = Project::where('status', 1)->get();
//         return view('market', [
//             'projects' => $projects,
//             'categories' => $categories
//         ]);
//     }
//     // show projects of a particular category 
//     public function category($id)
//     {
//         $categories = Category::all();
//         $projects = Project::where('category_id', $id)->where('status', 'active')->get();
//         return view('market', [
//             'projects' => $projects,
//             'categories' => $categories
//         ]);
//     }

//     // view method
//     public function create()
//     {
//         // get the categories
//         $categories = Category::all();
//         return view('project.create', ['categories' => $categories]);
//     }
//     public function store(Request $request, Project $project)
//     {

//         $client = Auth::user();

//         $project = new Project();

//         // Associate the client with the project
//         $project->client()->associate($client);

//         $project->category_id = $request->category_id;

//         $project->title = $request->title;
//         $project->description = $request->description;
//         $project->price = $request->price;

//         // Save the project
//         $project->save();

//         return redirect('/dashboard/client')->with('success', 'Project successfully created.');
//     }

//     // view method
//     public function edit($id, Category $categories)
//     {
//         $project = Project::findOrFail($id);
//         $categories = Category::all();
//         return view('project.edit', compact('project', 'categories'));
//     }
//     public function update(Request $request, $id)
//     {
//         $client = Auth::id();
//         // Validate the request data
//         $request->validate([
//             // 'title' => 'required|string|max:255',
//             'description' => 'required|string|max:255',
//             'price' => 'required|string|max:255',
//         ]);

//         $project = Project::findOrFail($id);

//         $project->category_id = intval($request->category_id);
//         $project->client_id = $client;
//         $project->price = $request->price;
//         $project->status = intval($request->status);
//         $project->title = $request->title;
//         $project->description = $request->description;

//         $project->save();

//         return redirect('/dashboard/client')->with('success', 'Project successfully updated.');
//     }
//     public function destroy($id)
//     {
//         Project::where('id', $id)->delete();
//         return redirect('/dashboard/client')->with('success', 'Project successfully deleted.');
//     }
// }

class ProjectController extends Controller
{
    public function index()
    {
        // Show all the projects, fetching from cache or database
        $categories = Category::all();

        $projects = Cache::remember('projects', 3600, function () {
            return Project::where('status', 1)->get();
        });
        Cache::has('projects');

        return view('market', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    // Show projects of a particular category
    public function category($id)
    {
        $categories = Category::all();

        // Cache the projects for each category separately
        $cacheKey = "projects_category_{$id}";
        $projects = Cache::remember($cacheKey, 3600, function () use ($id) {
            return Project::where('category_id', $id)
                ->where('status', 'active')
                ->get();
        });

        return view('market', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    // View method
    public function create()
    {
        // Get the categories
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

        // Save the project
        $project->save();

        // Clear projects cache
        Cache::forget('projects');
        Cache::forget("projects_category_{$request->category_id}");

        return redirect('/dashboard/client')->with('success', 'Project successfully created.');
    }

    // View method
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
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        $project = Project::findOrFail($id);
        $oldCategoryId = $project->category_id;

        $project->category_id = intval($request->category_id);
        $project->client_id = $client;
        $project->price = $request->price;
        $project->status = intval($request->status);
        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        // Clear projects cache
        Cache::forget('projects');
        Cache::forget("projects_category_{$oldCategoryId}");
        Cache::forget("projects_category_{$request->category_id}");

        return redirect('/dashboard/client')->with('success', 'Project successfully updated.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $categoryId = $project->category_id;

        $project->delete();

        // Clear projects cache
        Cache::forget('projects');
        Cache::forget("projects_category_{$categoryId}");

        return redirect('/dashboard/client')->with('success', 'Project successfully deleted.');
    }
}
