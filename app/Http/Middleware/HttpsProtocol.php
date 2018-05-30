<?php

namespace App\Http\Middleware;

use Closure;
use Request;
class HttpsProtocol
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
        if(str_contains( Request::getHost(),'org')) {
            return redirect('https://hanoiforum.vnu.edu.vn');
        }
        if (!$request->secure()) {
            if(Request::getHost() != 'dev.hanoiforum.com' && Request::getHost() != 'forum.fitme.vn' )
                return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
