<?php

namespace App\Http\Middleware;

use Closure;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($role == "enduser")
        {
            return redirect('enduser');
        }
        return $next($request);
    }
   /* public function handle($request, Closure $next)
    {
        $id = $request->ip();
        $ic = $request->ip();
        if($id == $ic)
        {
            return redirect('welcome');
        }
        return $next($request);
    }*/

}
