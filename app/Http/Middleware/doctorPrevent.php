<?php

namespace App\Http\Middleware;

use Closure;

class doctorPrevent
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
        if(!Session()->get('id')){

            return redirect('/medical/signin');
        }
        return $next($request);
    }
}
