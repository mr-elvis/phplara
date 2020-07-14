<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        //dd('hit');

        if (Auth::check() && Auth::user()->usertype == 'admini')
         {
            return $next($request);
        } 
        else {
            return redirect('/');
        }
        

        /*
        if(Auth::user() -> usertype == 'admini')
        {
            return $next($request);

        }
        else{
            return redirect('/');
        }
        */
    }
}
