<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman utama dashboard
     */
    public function index(Request $request)
    {
        $totalUsers = User::count();
        $totalPoints = User::sum('points') ?? 0;

        $fifteenMinutesAgo = now()->subMinutes(15);
        $onlineUsersQuery = User::with(['roles', 'dataLogins' => function ($q) {
            $q->latest('login_at');
        }])
        ->whereNotNull('last_activity_at')
        ->where('last_activity_at', '>=', $fifteenMinutesAgo)
        ->orderBy('last_activity_at', 'desc');

        $onlineUsersCount = (clone $onlineUsersQuery)->count();
        $onlineUsers = (clone $onlineUsersQuery)->take(16)->get();

        $topUsers = User::withCount('dataLogins')
            ->orderBy('points', 'desc')
            ->orderBy('data_logins_count', 'desc')
            ->take(5)
            ->get();

        $latestUsers = User::latest()->take(6)->get();

        // Dynamic Role Counts Breakdown (Excluding Master and Admin)
        $excludedRoles = ['master', 'admin'];
        $rolesList = \Spatie\Permission\Models\Role::withCount('users')->get();
        $usersWithoutRoleCount = User::doesntHave('roles')->count();

        $roleBreakdown = collect();
        foreach ($rolesList as $role) {
            $roleLower = strtolower($role->name);
            if (in_array($roleLower, $excludedRoles, true)) {
                continue;
            }

            $count = $role->users_count;
            if ($roleLower === 'user') {
                $count += $usersWithoutRoleCount;
            }
            $roleBreakdown->push([
                'name'  => ucfirst($role->name),
                'count' => $count,
            ]);
        }

        if (!$rolesList->pluck('name')->map('strtolower')->contains('user') && $usersWithoutRoleCount > 0) {
            $roleBreakdown->push([
                'name'  => 'User',
                'count' => $usersWithoutRoleCount,
            ]);
        }

        return view('dashboard', compact(
            'totalUsers',
            'totalPoints',
            'onlineUsersCount',
            'onlineUsers',
            'topUsers',
            'latestUsers',
            'roleBreakdown'
        ));
    }

    /**
     * Endpoint AJAX untuk real-time data pengguna online
     */
    public function getOnlineUsers(Request $request)
    {
        $fifteenMinutesAgo = now()->subMinutes(15);
        $onlineUsersQuery = User::with(['roles', 'dataLogins' => function ($q) {
            $q->latest('login_at');
        }])
        ->whereNotNull('last_activity_at')
        ->where('last_activity_at', '>=', $fifteenMinutesAgo)
        ->orderBy('last_activity_at', 'desc');

        $onlineUsersCount = (clone $onlineUsersQuery)->count();
        $onlineUsers = (clone $onlineUsersQuery)->take(16)->get();

        $html = view('pages.dashboard.partials._online_users_list', compact('onlineUsers', 'onlineUsersCount'))->render();

        return response()->json([
            'success'            => true,
            'online_users_count' => $onlineUsersCount,
            'html'               => $html,
        ]);
    }
}
