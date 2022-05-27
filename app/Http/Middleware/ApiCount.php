<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        \App\Models\ApiCount::query()->first()->increment('count');
        return $next($request);
    }
}
