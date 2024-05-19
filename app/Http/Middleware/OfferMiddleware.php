<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class OfferMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // access the "submit result page" in case if the authenticated user has a offer associated with the project  
        $freelancer = Auth::id();
        $offer = intval($request->route('id'));

        $hasOffer = Offer::where('freelancer_id', $freelancer)->where('id', $offer)->firstOrFail();
        if ($hasOffer) {
            return $next($request);
        } else {
            return redirect('/market');
        }
    }
}
