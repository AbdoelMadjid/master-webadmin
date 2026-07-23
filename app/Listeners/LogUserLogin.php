<?php

namespace App\Listeners;

use App\Models\AppSupport\DataLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Carbon;

class LogUserLogin
{
    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        $user = $event->user;
        if (!$user) {
            return;
        }

        $request = request();
        $now = Carbon::now();
        $ip = $request->ip();
        $userAgent = $request->userAgent();

        $latitude = $request->input('latitude') ?? $request->input('lat');
        $longitude = $request->input('longitude') ?? $request->input('lng') ?? $request->input('long');

        $latitude = ($latitude !== null && $latitude !== '') ? (float) $latitude : null;
        $longitude = ($longitude !== null && $longitude !== '') ? (float) $longitude : null;

        // Rule: Poin hanya ditambahkan jika belum pernah mendapatkan poin login dalam 24 jam terakhir.
        $twentyFourHoursAgo = Carbon::now()->subHours(24);

        $hasPointIn24h = DataLogin::query()
            ->where('user_id', $user->id)
            ->where('point_awarded', true)
            ->where('login_at', '>=', $twentyFourHoursAgo)
            ->exists();

        $shouldAwardPoint = !$hasPointIn24h;

        if ($shouldAwardPoint) {
            $user->increment('points');
        }

        DataLogin::create([
            'user_id'       => $user->id,
            'login_at'      => $now,
            'ip_address'    => $ip,
            'user_agent'    => $userAgent,
            'latitude'      => $latitude,
            'longitude'     => $longitude,
            'location'      => null,
            'point_awarded' => $shouldAwardPoint,
        ]);
    }
}
