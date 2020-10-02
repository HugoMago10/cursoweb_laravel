<?php

namespace App\Http\Middleware;

use Closure;

class MDusuario_registrado
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
        //$usuarioactual = Session::get('usuarioactual');
        $usuarioactual=\Auth::user();
        if ( isset($usuarioactual) ){
            if ($usuarioactual->id_tipo_usu!=4){
                return redirect('sin acceso4');
            }
        }else
            return redirect('login');
        return $next($request);
    }
}
