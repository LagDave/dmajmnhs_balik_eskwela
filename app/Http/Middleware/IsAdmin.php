<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(!$request->session()->has('is_admin')){
            return redirect(route('admin.index'))->with('failed', 'You are not authorized to visit this page');
        }
        return $next($request);
    }
}
