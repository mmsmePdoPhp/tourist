<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        dd(Auth::user());
        if(Auth::user()!=null && Auth::user()->isAdmin){
            return $next($request);
        }else{
            Auth::logout();
            $request->session()->flush();
            $request->session()->flash('error','your must be admin to see website.');
            return redirect('/');
        }

    }
}
