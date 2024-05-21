<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role !== 'admin') {
            return redirect('/home'); // Mengarahkan pengguna non-admin ke halaman lain
        }

        return $next($request);
    }
}
