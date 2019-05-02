<?php

namespace App\Http\Middleware;

use Closure;

class rolee
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
        if($role=="admin")
    {
        return redirect('news');
    }
        return $next($request);
    
    
}
