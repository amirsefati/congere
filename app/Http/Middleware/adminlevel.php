<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class adminlevel
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
        if(Auth::user()->userlevel == 2 )
        {
            return $next($request);

        }
    else
        {
            return response()->json('Only Admin can see it');
        }     
     }
}
