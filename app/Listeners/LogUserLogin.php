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
        // Skip point rewards and login count tracking during switch user (impersonation) mode
        if (session()->has('impersonator_id') || session()->has('is_leaving_impersonation')) {
            return;
        }

        $user = $event->user;
        if (!$user) {
            return;
        }

        $request = request();
        $deviceTime = $request->input('device_time') ?? $request->input('client_time');
        $now = Carbon::now();
        if ($deviceTime) {
            try {
                $now = Carbon::parse($deviceTime);
            } catch (\Throwable $e) {
                $now = Carbon::now();
            }
        }
        $ip = $request->ip();
        $userAgent = $request->userAgent();

        $latitude = $request->input('latitude') ?? $request->input('lat');
        $longitude = $request->input('longitude') ?? $request->input('lng') ?? $request->input('long');

        $latitude = ($latitude !== null && $latitude !== '') ? (float) $latitude : null;
        $longitude = ($longitude !== null && $longitude !== '') ? (float) $longitude : null;

        // Rule: Jika user sudah login pada hari (tanggal) yang sama,
        // update catatan login hari tersebut dan tambahkan jumlah loginnya.
        $loginDateStr = $now->toDateString();

        $existingLoginToday = DataLogin::query()
            ->where('user_id', $user->id)
            ->whereDate('login_at', $loginDateStr)
            ->latest('login_at')
            ->first();

        if ($existingLoginToday) {
            $existingLoginToday->increment('login_count');

            $updateData = [
                'login_at'   => $now,
                'ip_address' => $ip,
                'user_agent' => $userAgent,
            ];
            if ($latitude !== null) {
                $updateData['latitude'] = $latitude;
            }
            if ($longitude !== null) {
                $updateData['longitude'] = $longitude;
            }

            $existingLoginToday->update($updateData);
        } else {
            // Belum ada login dalam 24 jam terakhir: Tambahkan 1 poin dan buat catatan data login baru.
            $user->increment('points');

            DataLogin::create([
                'user_id'       => $user->id,
                'login_at'      => $now,
                'ip_address'    => $ip,
                'user_agent'    => $userAgent,
                'latitude'      => $latitude,
                'longitude'     => $longitude,
                'location'      => null,
                'point_awarded' => true,
                'login_count'   => 1,
            ]);
        }

        // Update user last_activity_at marker for current online session
        $user->update(['last_activity_at' => $now]);
    }
}
