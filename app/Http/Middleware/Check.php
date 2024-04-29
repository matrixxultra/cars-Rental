<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( auth()->guard("web")->attempt($request->all("email","password")) ) {
            return redirect()->intended("/");
        }
        elseif ( auth()->guard("admin")->attempt($request->all("email","password")) ) {
            return redirect()->intended("/admin");
        }
        else {
            return redirect()->back()->with("failed","Email Ou Mot de Pas Et Incorrect");
        }
    }
}
