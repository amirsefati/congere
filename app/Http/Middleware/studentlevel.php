<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class studentlevel
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
        if(Auth::user()->userlevel == 0 )
            {
                return $next($request);

            }
        else
            {
                return response()->json('Only student can see it');
            }
    }
}
