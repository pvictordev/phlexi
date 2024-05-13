<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offer;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    // see all the offers and get the page to accept one of them
    public function index()
    {
        $freelancer = Auth::id();
        $results = Offer::where('freelancer_id', $freelancer)->where('response', 1)->get();
        return view('result.show', ['results' => $results]);
    }
    // see all the offers that have a result as a client
    public function show()
    {
        $client = Auth::id();
        $results = Result::where('client_id', $client)->get();
        return view('result.show', ['results' => $results]);
    }
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
    public function edit($id, Request $request)
    {
        return view('result.edit');
    }
    public function update($id, Request $request)
    {
        $result = new Result();
        $result = Result::find($id);
        $result->status = intval($request->choice);
        $result->save();

        return redirect('/dashboard');
    }
    public function success()
    {
        $freelancer = Auth::id();
        $results = Result::where('freelancer_id', $freelancer)->where('status', 1)->get();
        return view('result.success', ['results' => $results]);
    }
}
