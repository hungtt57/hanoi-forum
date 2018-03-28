<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class ADMIN
{

    public function handle($request, Closure $next)
    {
        //login check
        if (auth('backend')->user()->type != User::ADMIN) {
           abort(404);
        }

        return $next($request);
    }
}
