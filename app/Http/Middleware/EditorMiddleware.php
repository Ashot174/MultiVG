<?php

namespace App\Http\Middleware;

use Closure;

class EditorMiddleware
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
        if($request->user() && $request->user()->hasRole('editor')) {
            return $next($request);
        }
        return back();
    }
}
