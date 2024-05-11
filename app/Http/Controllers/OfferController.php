<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Offer;
use App\Models\Project;

class OfferController extends Controller
{
    public function index($id)
    {
        return view('offer.request', ['id' => $id]);
    }
    public function show()
    {
        $client = Auth::id();
        $offers = Offer::where('client_id', $client)->where('response', 0)->get();

        return view('offer.show', ['offers' => $offers]);
    }
    public function store(Request $request, $id)
    {
        $freelancer = Auth::id();

        $project = Project::find($id);
        $client = $project->client_id;

        $offer = new Offer();

        $offer->project_id = $id;
        $offer->client_id = $client;
        $offer->freelancer_id = $freelancer;
        $offer->description = $request->description;

        $offer->save();

        return redirect('/market');
    }
    public function edit($id)
    {
        return view('offer.edit', ['offer_id' => $id]);
    }
    public function update(Request $request, $id)
    {
        $offer = new Offer();
        $offer = Offer::find($id);
        $offer->response = intval($request->choice);
        $offer->save();

        redirect('/dashboard');
    }
    public function destroy()
    {
    }
}
