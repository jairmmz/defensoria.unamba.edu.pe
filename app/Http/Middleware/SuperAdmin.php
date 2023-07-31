<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Condición para que los usuarios de rol superadmin puedan acceder a la ruta
        if (Auth::user()->role == 'superadmin') {
            // Permitir ingresar a la ruta
            return $next($request);
        }

        // Si el usuario no tiene el rol de 'superadmin', redirigir o responder con un error
        return abort(403, 'No tienes permiso para acceder a esta página.');
    }
}
