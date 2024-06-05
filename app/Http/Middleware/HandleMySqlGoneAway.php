<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class HandleMySqlGoneAway
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            return $next($request);
        } catch (QueryException $e) {
            if ($e->getCode() === 'HY000' && str_contains($e->getMessage(), '2006 MySQL server has gone away')) {
                DB::reconnect();
                return $next($request);
            }

            throw $e;
        }
    }
}
