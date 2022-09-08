<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role='user')
    {
        if ($role === null) {
            throw new \InvalidArgumentException('The $role argument is required.');
        }

        if($request->user() && $request->user()->role === $role) {
            return $next($request);
        }

        return abort(403, 'Unauthorized action.');
    }
}