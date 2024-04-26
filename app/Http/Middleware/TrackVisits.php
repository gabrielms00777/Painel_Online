<?php

namespace App\Http\Middleware;

use App\Jobs\UpdateVisits;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cookie_id = $request->cookie('visitor_id') ?? uniqid();

        $ip = $request->ip();
        $path = $request->path();

        UpdateVisits::dispatch($cookie_id, $path, $ip);

        return $next($request)->cookie('visitor_id', $cookie_id, 7 * 24 * 60);
    }
}
