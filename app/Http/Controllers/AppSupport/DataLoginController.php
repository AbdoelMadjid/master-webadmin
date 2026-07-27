<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\DataLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\Activitylog\Models\Activity;

class DataLoginController extends Controller
{
    /**
     * Tampilkan audit trail (Riwayat Session Login & Audit Mutation Log)
     */
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'login-log');

        // Users for filter selection
        $allUsers = User::orderBy('name', 'asc')->get();

        // Data Login Session Logs
        $logins = DataLogin::with(['user.roles'])
            ->orderBy('login_at', 'desc')
            ->get();

        $totalLogins = DataLogin::count();
        $todayLogins = DataLogin::whereDate('login_at', Carbon::today())->count();
        $fifteenMinutesAgo = Carbon::now()->subMinutes(15);
        $activeUsers24h = User::where('last_activity_at', '>=', $fifteenMinutesAgo)
            ->orWhereHas('dataLogins', function ($query) use ($fifteenMinutesAgo) {
                $query->where('login_at', '>=', $fifteenMinutesAgo);
            })
            ->distinct()
            ->count();
        $totalPoints = User::sum('points');

        // Data Mutation Activity Logs (Audit Trail)
        $activities = Activity::with(['causer', 'subject'])
            ->latest()
            ->get();

        $totalMutations = Activity::count();
        $todayMutations = Activity::whereDate('created_at', Carbon::today())->count();
        $createdMutations = Activity::where('event', 'created')->count();
        $updatedMutations = Activity::where('event', 'updated')->count();
        $deletedMutations = Activity::where('event', 'deleted')->count();

        if ($request->wantsJson() || $request->ajax()) {
            if ($activeTab === 'activity-log') {
                return response()->json([
                    'success' => true,
                    'data'    => $activities,
                    'stats'   => [
                        'total_mutations'   => $totalMutations,
                        'today_mutations'   => $todayMutations,
                        'created_mutations' => $createdMutations,
                        'updated_mutations' => $updatedMutations,
                        'deleted_mutations' => $deletedMutations,
                    ]
                ]);
            }

            return response()->json([
                'success' => true,
                'data'    => $logins,
                'stats'   => [
                    'total_logins'     => $totalLogins,
                    'today_logins'     => $todayLogins,
                    'active_users_24h' => $activeUsers24h,
                    'total_points'     => $totalPoints,
                ]
            ]);
        }

        return view('pages.appsupport.data-login', compact(
            'activeTab',
            'allUsers',
            'logins',
            'totalLogins',
            'todayLogins',
            'activeUsers24h',
            'totalPoints',
            'activities',
            'totalMutations',
            'todayMutations',
            'createdMutations',
            'updatedMutations',
            'deletedMutations'
        ));
    }

    /**
     * Hapus 1 catatan riwayat login
     */
    public function destroy($id)
    {
        $dataLogin = DataLogin::findOrFail($id);
        $dataLogin->delete();

        return response()->json([
            'success' => true,
            'message' => 'Catatan riwayat login berhasil dihapus.',
        ]);
    }

    /**
     * Hapus semua catatan riwayat login (Clear Log)
     */
    public function clearAll()
    {
        DataLogin::query()->truncate();

        return response()->json([
            'success' => true,
            'message' => 'Semua riwayat login berhasil dibersihkan.',
        ]);
    }

    /**
     * Hapus 1 catatan activity log mutasi data
     */
    public function destroyActivity($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return response()->json([
            'success' => true,
            'message' => 'Catatan audit activity log berhasil dihapus.',
        ]);
    }

    /**
     * Hapus semua catatan activity log mutasi data
     */
    public function clearAllActivities()
    {
        Activity::query()->truncate();

        return response()->json([
            'success' => true,
            'message' => 'Semua riwayat audit activity log berhasil dibersihkan.',
        ]);
    }
}
