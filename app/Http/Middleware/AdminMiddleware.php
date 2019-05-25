<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class AdminMiddleware
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
        if(auth()->check() && $request->user()->role->level == 4){
            return redirect()->guest('home');
        }
        return $next($request);
    }
}
