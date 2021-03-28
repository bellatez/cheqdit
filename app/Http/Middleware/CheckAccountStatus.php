<?php

namespace App\Http\Middleware;

use Closure;

class CheckAccountStatus
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
        if (!auth()->user()->is_active && auth()->user()->email_verified_at != null) {
            auth()->logout();
            $message = 'Your account has been Deactivated. Please contact your administrator.';
            return redirect()->route('login')->with('warning', $message);
        }
        return $next($request);
    }
}
