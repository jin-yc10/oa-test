<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Log::info(
            sprintf("METHOD=%s URL=%s",$request->method(),$request->url())
        );
        return $next($request);
    }
}
