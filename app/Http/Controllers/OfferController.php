<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Offer;
use App\Models\Project;
use App\Models\User;
use App\Notifications\ProjectAccepted;
use App\Notifications\ProjectOffered;
use Illuminate\Support\Facades\Log;

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
        $request->validate([
            'description' => 'required|string|max:255', 
        ]);

        $freelancer = Auth::id();
        $project = Project::findOrFail($id); 
        $client = User::findOrFail($project->client_id);
        $freelancerId = User::findOrFail($freelancer);

        $offer = new Offer();
        $offer->project_id = $id;
        $offer->client_id = $client->id; 
        $offer->freelancer_id = $freelancer; 
        $offer->description = $request->description;

        // notify the client about that a freelancer has bid on his project
        try {
            $client->notify(new ProjectOffered($freelancerId, $project));
        } catch (\Exception $e) {
            Log::error('Notification error: ' . $e->getMessage());
            return redirect('/market/all')->with('error', 'Failed to send notification: ' . $e->getMessage());
        }

        try {
            $offer->save(); // Save the offer
            return redirect('/market/all')->with('success', 'Offer successfully submitted');
        } catch (\Exception $e) {
            Log::error('Offer save error: ' . $e->getMessage());
            return redirect('/market/all')->with('error', 'Failed to submit offer: ' . $e->getMessage());
        }
    }

    // accept the offer as a client
    public function edit($id)
    {
        return view('offer.edit', ['offer_id' => $id]);
    }
    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->response = intval($request->choice);
        $offer->save();

        $project = Project::findOrFail($offer->project_id); 
        $freelancer = User::findOrFail($offer->freelancer_id); 

        // notify the freelancer if the client accepted his bid on the project
        $freelancer->notify(new ProjectAccepted($offer, $offer->response));

        return redirect('/dashboard/client')->with('success', 'Offer response successfully updated and freelancer notified.');
    }
    public function destroy()
    {
    }
}
