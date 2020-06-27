<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserType
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
        if(Auth::user()){
            if(Auth::user()->type=='user'){
                return $next($request);
            }
            return Redirect::back();
           
        }
        return redirect('/');
    }
}
