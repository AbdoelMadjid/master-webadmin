<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $now = Carbon::now();

            // Update last_activity_at jika belum ada atau jika sudah lebih dari 30 detik sejak update terakhir
            if (!$user->last_activity_at || $user->last_activity_at->diffInSeconds($now) >= 30) {
                $user->update(['last_activity_at' => $now]);
            }
        }

        return $next($request);
    }
}
