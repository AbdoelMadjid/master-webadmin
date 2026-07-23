<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\DataLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DataLoginController extends Controller
{
    /**
     * Tampilkan riwayat login semua user
     */
    public function index(Request $request)
    {
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

        if ($request->wantsJson() || $request->ajax()) {
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
            'logins',
            'totalLogins',
            'todayLogins',
            'activeUsers24h',
            'totalPoints'
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
}
