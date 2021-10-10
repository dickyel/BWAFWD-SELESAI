<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

class isAdmin
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
        if(Auth::user() == 'USER' )
        {
            return $next($request);

            return redirect('/');
        }
       

        if( Auth::user()->roles == 'ADMIN')
        {
            return $next($request);

            return redirect('/admin');
        }
       
    }
}
