<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AksesAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role1 = NULL)
    {
        if(Auth::user()->akses == 'sp_admin' && $role1='sp_admin'){
            return $next($request);
        }
        else if(Auth::user()->akses == 'admin'){
            return $next($request);
        }
        else if(Auth::user()->akses == 'operator'){
            return $next($request);
        }

        return abort(404);
    }
}
