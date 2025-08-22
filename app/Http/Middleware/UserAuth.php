<?php

// app/Http/Middleware/UserAuth.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // ✅ If user tries to open login but already logged in
        if ($request->path() == '/' && $request->session()->has('user')) {
            return redirect('/index');
        }

        // // ✅ If user tries to open protected page but not logged in
        // if ($request->path() != '/' && !$request->session()->has('user')) {
        //     return redirect('/');
        // }

        return $next($request);
    }
}
