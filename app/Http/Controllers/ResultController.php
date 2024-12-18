<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offer;
use App\Models\Project;
use App\Models\Result;
use App\Models\User;
use App\Notifications\ResultAccepted;
use App\Notifications\ResultSubmitted;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    // see all the results and get the page to accept one of them as a client
    public function index()
    {
        $client = Auth::id();
        $results = Result::with('project')->where('client_id', $client)->where('status', null)->get();
        return view('result.index', ['results' => $results]);
    }

    // see the accepted results as a freelancer
    public function show()
    {
        $freelancer = Auth::id();
        $results = Result::where('freelancer_id', $freelancer)->where('status', 1)->get();
        return view('result.success', ['results' => $results]);
    }

    // create the result page
    public function create($id)
    {
        return view('result.create');
    }

    // create the result
    public function store(Request $request, $id)
    {
        $offer = Offer::findOrFail($id); 
        $client = User::findOrFail($offer->client_id);
        $freelancer = Auth::id();
        $project = $offer->project_id;

        // Create the result
        $result = new Result();
        $result->offer_id = $id;
        $result->project_id = $project;
        $result->freelancer_id = $freelancer;
        $result->client_id = $client->id;
        $result->description = $request->description;

        $client->notify(new ResultSubmitted($result));

        echo 'result created and maybe notif received'; 
        $result->save();

        return redirect('/dashboard/freelancer')->with('success', 'Result successfully submitted and client notified.');
    }

    public function edit()
    {
        return view('result.edit');
    }

    public function update($id, Request $request)
    {
        $result = Result::findOrFail($id);
        $freelancer = User::findOrFail($result->freelancer_id);
        $result->status = intval($request->choice);
        $result->save();

        if ($result->status === 1) {
            $project = Project::findOrFail($result->project_id);
            $freelancer->notify(new ResultAccepted($result));

            echo 'the notification was sent';
            
            $project->status = 0;
            $project->save();
        }

        return redirect("/review/{$id}/create")->with('success', 'Result response successfully updated and freelancer notified.');
    }
}
