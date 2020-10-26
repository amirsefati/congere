<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class teacherlevel
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
        if(Auth::user()->userlevel >= 1 )
        {
            return $next($request);

        }
    else
        {
            return response()->json('Only teacher can see it');
        }   
     }
}
