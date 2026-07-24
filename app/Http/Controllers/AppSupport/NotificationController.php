<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\ManajemenPengguna\PasswordResetRequest;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Fetch real-time notification data for header topbar
     */
    public function fetch(Request $request)
    {
        if (!auth()->check()) {
            return response()->json([
                'success'          => false,
                'total_count'      => 0,
                'peringatan_count' => 0,
                'html_peringatan'  => '',
            ]);
        }

        $authUser = auth()->user();
        $isAdminOrMaster = method_exists($authUser, 'hasAnyRole')
            ? $authUser->hasAnyRole(['master', 'admin', 'Master', 'Admin'])
            : in_array(strtolower($authUser->role ?? ''), ['master', 'admin']);

        $unreadPasswordResets = collect();
        $pendingUsers = collect();
        $pendingDeactivations = collect();

        if ($isAdminOrMaster) {
            try {
                $unreadPasswordResets = PasswordResetRequest::with('user')
                    ->where('status', 'pending')
                    ->where('is_read', false)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $unreadPasswordResets = collect();
            }

            try {
                $pendingUsers = User::where('status', 'pending')
                    ->where('is_read', false)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $pendingUsers = collect();
            }

            try {
                $pendingDeactivations = User::where('status', 'deactivate_pending')
                    ->where('is_read', false)
                    ->orderBy('updated_at', 'desc')
                    ->get();
            } catch (\Throwable $e) {
                $pendingDeactivations = collect();
            }
        }

        $totalPeringatan = $unreadPasswordResets->count() + $pendingUsers->count() + $pendingDeactivations->count();

        $htmlPeringatan = view('partials.menus._notifications_peringatan_items', [
            'pendingUsers'         => $pendingUsers,
            'unreadPasswordResets' => $unreadPasswordResets,
            'pendingDeactivations' => $pendingDeactivations,
        ])->render();

        return response()->json([
            'success'          => true,
            'total_count'      => $totalPeringatan,
            'peringatan_count' => $totalPeringatan,
            'html_peringatan'  => $htmlPeringatan,
        ]);
    }
}
