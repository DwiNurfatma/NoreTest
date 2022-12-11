<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class UserMiddleware
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
        if (Auth::user()) {
            if ($request->user() && $request->user()->role == 'user') {
                return $next($request);
            }
            // if ($request->user() && $request->user()->account_role == 'admin') {
            //     return $next($request);
            // }

            return redirect('/user');
        }

        return redirect('/login');
    }
}
