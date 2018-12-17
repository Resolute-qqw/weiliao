<?php

namespace App\Http\Middleware;

use Closure;

class loginVerification
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
        if(!session('user_id') || session('user_id')==""){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
