<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() &&
                (Auth::user()->role_id == 2) ) {

            return $next($request);
        }
        else{
            session(['link' => url()->current()]);
            return redirect()->route('login');
        }
    }
}
