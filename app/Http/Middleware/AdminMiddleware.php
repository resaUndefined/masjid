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
        if(Auth::user()->role->level != 4){
            return $next($request);
        }
        return redirect('home')->with('error','You have not admin access');
    }
}
