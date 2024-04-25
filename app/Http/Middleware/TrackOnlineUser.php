<?php

namespace App\Http\Middleware;

use App\Jobs\UpdateOnlineUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class TrackOnlineUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session_id = Session::getId();
        $url = $request->path();
        $ip = $request->ip();
        $last_activity = now();

        UpdateOnlineUser::dispatch($session_id, $url, $ip, $last_activity);

        return $next($request);
    }
}
