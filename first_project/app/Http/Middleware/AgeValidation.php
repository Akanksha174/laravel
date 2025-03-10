<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeValidation
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Example: Check if age is passed in the request
        if ($request->has('age') && $request->age < 18) {
            return response()->json(['error' => 'You must be 18 or older.'], 403);
        }

        return $next($request);
    }
}
