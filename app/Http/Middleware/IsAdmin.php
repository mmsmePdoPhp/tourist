<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

        //check and authorize if use is admin
        if (Gate::allows('admin',Auth::user())) {
            //authenticated user is admin
            return $next($request);
        }else{
            //authenticated user does not admin
            Auth::logout();//logot user
            $request->session()->flush(); //remove all sessions
            $request->session()->flash('error','email or password is not correct.');//flash error messsge
            return redirect('/');//redirecto to login page
        }

    }
}
