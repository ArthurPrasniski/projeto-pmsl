<?php

namespace App\Http\Middleware;

use Closure;

class UsuarioTI
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
        if (auth()->user()->nivel >= 2) {
            return $next($request);
        }
        return redirect('/');
    }
}
