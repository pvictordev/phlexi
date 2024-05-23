<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offer;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    // see all the results and get the page to accept one of them as a client
    public function index()
    {
        $client = Auth::id();
        $results = Result::where('client_id', $client)->where('status', null)->get();
        return view('result.index', ['results' => $results]);
    }

    // see the accepted results as a freelancer
    public function show()
    {
        $freelancer = Auth::id();
        $results = Result::where('freelancer_id', $freelancer)->where('status', 1)->get();
        return view('result.success', ['results' => $results]);
    }

    // create the result
    public function create($id)
    {
        return view('result.create');
    }
    public function store(Request $request, $id)
    {
        // offer id is the $id
        $client = Offer::where('id', $id)->firstOrfail();
        $freelancer = Auth::id();

        $result = new Result();
        $result->offer_id = $id;
        $result->freelancer_id = $freelancer;
        $result->client_id = $client->client_id;
        $result->description = $request->description;
        $result->save();

        return redirect('/dashboard');
    }
    public function edit()
    {
        return view('result.edit');
    }
    public function update($id, Request $request)
    {
        $result = new Result();
        // update a certain result, add the status of done
        $result = Result::find($id);
        $result->status = intval($request->choice);

        // close the project if the result is accepted

        $result->save();

        return redirect("/review/{$id}/create");
    }
}
