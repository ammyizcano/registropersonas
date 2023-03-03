<?php

namespace App\Http\Middleware;


use Illuminate\Http\Request;
use Closure;

class AdminAuth {
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(auth()->user()->role_id =='1'){
                 return $next($request);
            }
        }
        return redirect()->route('persona.create')->with('store','¡Acceso denegado! No eres usuario administrador');
    }
}