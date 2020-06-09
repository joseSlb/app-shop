<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Un middleware es un mecanismo que se utiliza para filtrar las peticiones HTTP en una aplicación
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!auth()->user()->admin) { //verificar si un usuario inicio sesion
            return redirect('/');  //en caso de que no, redirigimos a pagina login
        }

        return $next($request);
    }
}
