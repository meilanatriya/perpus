<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isOperator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if(Auth::guard($guard)->check() && Auth::user() && (Auth::user()->level == 1 || Auth::user()->level == 2)){
            return $next($request); 
        }
        return redirect('/login');
    }
}
