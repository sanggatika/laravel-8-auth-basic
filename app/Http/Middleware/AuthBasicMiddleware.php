<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\DB;

class AuthBasicMiddleware
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
        $UserLogin = session()->get('userLogin');
        $uri_path = $request->route()->getName();

        $pathName_auth = ['auth.login', 'auth.register', 'auth.forgot_password'];

        if($UserLogin != null)
        {
            return $next($request);
        }else{
            return redirect()->route('auth.logout');
        }        
    }
}
