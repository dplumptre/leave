<?php

namespace App\Http\Middleware;

use Closure;

class mustBeSupervisor
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
     
        if (   $request->user()->role == 'admin'  OR $request->user()->role == 'supervisor') {
            return $next($request); 
        }

      
        return redirect('access-denied');
    }
}
