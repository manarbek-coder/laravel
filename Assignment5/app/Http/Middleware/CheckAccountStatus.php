<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccountStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = (object) [
            'status' => 'active'
        ];

        $request->user()->status

        if ($user->status !== 'active') {
            return redirect()->route('account.inactive');
        }

        return $next($request);
    }
}