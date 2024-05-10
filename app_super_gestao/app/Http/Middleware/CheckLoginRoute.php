<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $rota = explode('/',$request->path());


        if ($rota[0] == 'app' && !$request->session()->has('user_logged_in')) {
            $request(['user_logged_in',true]);
            return redirect()->route('login');
        }
        

        return $next($request);
    }
}
