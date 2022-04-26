<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class chkcountry
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
        //  echo "<h1><b>Middleware is called</b></h1>";
         if ($request->country && !in_array($request->country, array("india","Gujarat","Mumbai"))) {
            return redirect("noaccess");
        }
        return $next($request);
    }
}
