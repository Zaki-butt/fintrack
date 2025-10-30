<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = $request->user();

        // Debug
        // dd($user->role, $role);

        if (! $user || $user->role !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
