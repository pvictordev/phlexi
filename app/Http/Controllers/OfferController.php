<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Offer;
use App\Models\Project;
use App\Models\User;

class OfferController extends Controller
{
    // show the offers from the freelancers that are not accepted to the client
    public function show()
    {
        $client = Auth::id();
        $offers = Offer::where('client_id', $client)->where('response', 0)->get();

        return view('offer.show', [
            'offers' => $offers,
        ]);
    }

    // show the offers from the freelancers that are accepted to the freelancer
    public function accepted()
    {
        $freelancer = Auth::id();
        $acceptedOffers = Offer::with('project')->where('freelancer_id', $freelancer)->where('response', 1)->get();
        return view('offer.accepted', ['acceptedOffers' => $acceptedOffers]);
    }

    // create an offer as a freelancer
    public function create()
    {
        return view('offer.create');
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

        return redirect('/market/all')->with('success', 'Offer successfully submitted');
    }

    // accept the offer as a client
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

        return redirect('/dashboard/client')->with('success', 'Offer successfully accepted.');
    }
    public function destroy()
    {
    }
}
