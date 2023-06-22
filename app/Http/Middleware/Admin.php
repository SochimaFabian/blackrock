<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
    	if ($request->user() && auth()->user()->typeofuser == 'admin') {
            return $next($request);
        }
        return redirect()->route('index')->with('error', 'Unauthorized access.');
    }
}
