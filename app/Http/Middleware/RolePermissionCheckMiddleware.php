<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RolePermissionCheckMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $this->auth->user();
        $permission = $request->method().' '.$request->url();
        \Log::debug($permission);
        \Log::debug('Has Role SuperUser '.$user->hasRole('SuperUser'));
        \Log::debug('Can create-post '.$user->can('create-post'));
        if($user->can('create-post')) {
            return $next($request);
        } else {
            return response(view('errors.403'), 403);
        }
    }
}
