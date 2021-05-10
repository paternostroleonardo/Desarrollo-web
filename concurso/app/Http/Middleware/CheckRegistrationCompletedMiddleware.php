<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRegistrationCompletedMiddleware
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
        if (is_null(auth()->user()->lastname)
            && is_null(auth()->user()->identification)
            && is_null(auth()->user()->phone)
            && is_null(auth()->user()->department_id)
            && is_null(auth()->user()->city_id)
            && is_null(auth()->user()->namedpto)
            && is_null(auth()->user()->namecity)) {
            return redirect()->route('register-step2.create');
        }
        return $next($request);
    }
}
