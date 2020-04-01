<?php

namespace App\Http\Middleware;

use Closure;

class DebugBar
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
        if ($request->get("debug") == 'on')
            $request->session()->put('debug', 'on');

        if ($request->get("debug") == 'off')
            $request->session()->forget('debug');

        if ($request->session()->has('debug')) {
            \Debugbar::enable();
        } else {
            \Debugbar::disable();
        }
        return $next($request);
    }
}
