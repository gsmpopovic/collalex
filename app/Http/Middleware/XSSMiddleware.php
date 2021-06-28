<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XSSMiddleware
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
        $input = $request->all();
        
        array_walk_recursive($input, function($elem){
            $elem = strip_tags($elem);
        });

        $request->merge($input);
        
        return $next($request);
    }
}
