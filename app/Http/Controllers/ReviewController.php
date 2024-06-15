<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offer;
use App\Models\Result;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review.create');
    }
    public function store($id, Request $request)
    {
        $review = new Review();

        // get the current project on which the review is left, and the freelancer who built the result and received the review
        $result = new Result();
        $result = Result::find($id);
        $offer_id = $result->offer_id;
        $offer = new Offer();
        $offer = Offer::find($offer_id);

        $review->description = $request->description;
        $review->rating = $request->rating;
        $review->result_id = $id;
        $review->freelancer_id = $offer->freelancer_id;
        $review->client_id = $offer->client_id;
        $review->project_id = $offer->project_id;

        $review->save();

        return redirect('/dashboard/client')->with('success', 'Review successfully created.');
    }

    public function edit($id)
    {
        $review = Review::where('id', $id)->first();
        return view('review.edit', [
            'review' => $review,
            'id' => $id
        ]);
    }

    public function update($id, Request $request)
    {

        $review = new Review();

        $review = Review::find($id);

        $review->description = $request->description;
        $review->rating = $request->rating;

        $review->save();

        return redirect('/dashboard/client')->with('success', 'Reivew successfully updated.');
    }

    public function destroy($id)
    {
        Review::where('id', $id)->delete();
        return redirect('/dashboard/client')->with('success', 'Review successfully removed.');
    }
}
