<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticate
{

    public function handle($request, Closure $next)
    {
        //login check

        if (auth('backend')->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        return $next($request);
    }
}
