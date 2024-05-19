<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // access the "submit result page" in case if the authenticated user has a offer associated with the project  
        $client = Auth::id();
        $result = intval($request->route('id'));

        $hasOffer = Result::where('client_id', $client)->where('id', $result)->firstOrFail();
        if ($hasOffer) {
            return $next($request);
        } else {
            return redirect('/dashboard');
        }
    }
}
