<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\UserRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('roles')->orderBy('name', 'asc')->get();
        $roles = Role::all();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $users,
            ]);
        }

        return view('pages.manajemenpengguna.users', compact('users', 'roles'));
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['email_verified_at'] = now();
        $data['status'] = 'approved';

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user = User::create($data);

        if ($request->has('roles')) {
            $user->syncRoles($request->input('roles'));
        }

        return response()->json([
            'success' => true,
            'message' => "Pengguna '{$user->name}' berhasil ditambahkan.",
            'data'    => $user->load('roles'),
        ]);
    }

    public function show($id)
    {
        $user = User::with('roles')->findOrFail($id);

        return response()->json([
            'success'        => true,
            'data'           => array_merge($user->toArray(), [
                'avatar_url' => $user->avatar_url,
            ]),
            'assigned_roles' => $user->roles->pluck('name'),
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        if ($request->has('roles')) {
            $user->syncRoles($request->input('roles'));
        }

        return response()->json([
            'success' => true,
            'message' => "Data pengguna '{$user->name}' berhasil diperbarui.",
            'data'    => $user->load('roles'),
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak dapat menghapus akun Anda sendiri yang sedang aktif.',
            ], 422);
        }

        \Illuminate\Support\Facades\DB::transaction(function () use ($user) {
            $user->delete();
        });

        return response()->json([
            'success' => true,
            'message' => "Pengguna '{$user->name}' beserta seluruh data relasinya berhasil dihapus.",
        ]);
    }

    public function downloadTemplate()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Template Import User');

        // Headers
        $headers = ['No', 'Nama Lengkap *', 'Email *', 'Password *', 'Role (opsional)'];
        $sheet->fromArray([$headers], null, 'A1');

        // Styling Headers
        $headerRange = 'A1:E1';
        $sheet->getStyle($headerRange)->applyFromArray([
            'font' => [
                'bold'  => true,
                'color' => ['rgb' => 'FFFFFF'],
                'size'  => 11,
            ],
            'fill' => [
                'fillType'   => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '1E1E2D'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical'   => Alignment::VERTICAL_CENTER,
            ],
        ]);

        // Sample Data Rows
        $sampleData = [
            [1, 'Budi Santoso', 'budi.santoso@example.com', 'Password123!', 'admin'],
            [2, 'Siti Rahmawati', 'siti.rahmawati@example.com', 'Password123!', 'user'],
            [3, 'Agus Setiawan', 'agus.setiawan@example.com', 'Password123!', 'developer'],
        ];
        $sheet->fromArray($sampleData, null, 'A2');

        // Auto-fit column widths
        foreach (range('A', 'E') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        $filename = 'Template_Master_Import_Pengguna.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv|max:5120',
        ], [
            'excel_file.required' => 'Silakan pilih berkas Excel atau CSV terlebih dahulu.',
            'excel_file.mimes'    => 'Format berkas harus berupa .xlsx, .xls, atau .csv.',
            'excel_file.max'      => 'Ukuran berkas maksimal adalah 5MB.',
        ]);

        $file = $request->file('excel_file');

        try {
            $spreadsheet = IOFactory::load($file->getRealPath());
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal membaca berkas Excel: ' . $e->getMessage(),
            ], 422);
        }

        if (count($rows) < 2) {
            return response()->json([
                'success' => false,
                'message' => 'Berkas Excel tidak memiliki data baris pengguna.',
            ], 422);
        }

        $importedCount = 0;
        $skippedRows = [];

        // Loop rows starting from Row 2
        foreach ($rows as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue; // Skip header row
            }

            $name = trim($row['B'] ?? '');
            $email = strtolower(trim($row['C'] ?? ''));
            $password = trim($row['D'] ?? '');
            $roleStr = trim($row['E'] ?? '');

            // Skip empty rows
            if (empty($name) && empty($email) && empty($password)) {
                continue;
            }

            // Validation per row
            if (empty($name) || empty($email) || empty($password)) {
                $skippedRows[] = "Baris #{$rowIndex}: Nama, Email, dan Password wajib diisi.";
                continue;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $skippedRows[] = "Baris #{$rowIndex} ({$name}): Format email '{$email}' tidak valid.";
                continue;
            }

            if (User::where('email', $email)->exists()) {
                $skippedRows[] = "Baris #{$rowIndex} ({$name}): Email '{$email}' sudah terdaftar (duplikat).";
                continue;
            }

            // Create User
            $user = User::create([
                'name'              => $name,
                'email'             => $email,
                'password'          => Hash::make($password),
                'email_verified_at' => now(),
                'status'            => 'approved',
            ]);

            // Sync Role(s) if provided
            if (!empty($roleStr)) {
                $roles = array_map('trim', explode(',', strtolower($roleStr)));
                $validRoles = Role::whereIn('name', $roles)->pluck('name')->toArray();
                if (!empty($validRoles)) {
                    $user->syncRoles($validRoles);
                }
            }

            $importedCount++;
        }

        $message = "Berhasil mengimpor {$importedCount} data pengguna baru.";
        if (count($skippedRows) > 0) {
            $message .= " (" . count($skippedRows) . " baris dilewati).";
        }

        return response()->json([
            'success'        => true,
            'message'        => $message,
            'imported_count' => $importedCount,
            'skipped_rows'   => $skippedRows,
        ]);
    }

    public function assignDefaultRoleBulk()
    {
        $usersWithoutRoles = User::doesntHave('roles')->get();

        if ($usersWithoutRoles->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Semua akun pengguna saat ini sudah memiliki role.',
                'count'   => 0,
            ]);
        }

        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
        $count = 0;

        \Illuminate\Support\Facades\DB::transaction(function () use ($usersWithoutRoles, $userRole, &$count) {
            foreach ($usersWithoutRoles as $user) {
                $user->assignRole($userRole);
                $count++;
            }
        });

        return response()->json([
            'success' => true,
            'message' => "Berhasil memberikan role 'User' secara massal kepada {$count} akun pengguna.",
            'count'   => $count,
        ]);
    }

    public function impersonate($id)
    {
        $targetUser = User::findOrFail($id);

        if ($targetUser->id === Auth::id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda sudah berada di akun Anda sendiri.',
            ], 422);
        }

        // Auto verify target user if email_verified_at is null so verified middleware does not block access to dashboard
        if (is_null($targetUser->email_verified_at)) {
            $targetUser->forceFill(['email_verified_at' => now()])->save();
        }

        // Save original user ID in session if not already in impersonation mode
        if (!session()->has('impersonator_id')) {
            session(['impersonator_id' => Auth::id()]);
        }

        // Login as target user
        Auth::login($targetUser);

        // Force clear any previous intended URL from session so it won't redirect back to users table
        session()->forget('url.intended');

        return response()->json([
            'success'  => true,
            'message'  => "Berhasil beralih ke akun '{$targetUser->name}'.",
            'redirect' => route('homepage'),
        ]);
    }

    public function leaveImpersonate()
    {
        if (!session()->has('impersonator_id')) {
            return redirect()->route('homepage');
        }

        $impersonatorId = session('impersonator_id');
        session(['is_leaving_impersonation' => true]);

        $impersonator = User::find($impersonatorId);
        if ($impersonator) {
            Auth::login($impersonator);
            session()->forget('impersonator_id');
            session()->forget('is_leaving_impersonation');
            return redirect()->route('manajemenpengguna.users')->with('success', "Anda telah kembali ke akun asli ({$impersonator->name}).");
        }

        session()->forget('impersonator_id');
        session()->forget('is_leaving_impersonation');
        return redirect()->route('homepage');
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status'  => 'approved',
            'is_read' => true,
        ]);

        if ($user->roles->isEmpty()) {
            $role = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
            $user->assignRole($role);
        }

        return response()->json([
            'success' => true,
            'message' => "Akun pengguna '{$user->name}' berhasil disetujui dan diberikan role User.",
            'data'    => $user->load('roles'),
        ]);
    }

    public function reject($id)
    {
        $user = User::findOrFail($id);

        \App\Models\ManajemenPengguna\RejectedRegistration::updateOrCreate(
            ['email' => $user->email],
            [
                'name'        => $user->name,
                'rejected_at' => now(),
            ]
        );

        $userName = $user->name;
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => "Pengajuan akun baru '{$userName}' telah ditolak dan akun telah dihapus dari sistem.",
        ]);
    }

    public function deactivate($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak dapat menonaktifkan akun Anda sendiri yang sedang aktif.',
            ], 422);
        }

        $user->update([
            'status'           => 'inactive',
            'is_read'          => true,
            'last_activity_at' => null,
        ]);

        // Hapus sesi pengguna jika tabel sessions tersedia di database
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('sessions')) {
                \Illuminate\Support\Facades\DB::table('sessions')
                    ->where('user_id', $user->id)
                    ->delete();
            }
        } catch (\Throwable $e) {
            // Abaikan jika tabel sessions tidak digunakan
        }

        return response()->json([
            'success' => true,
            'message' => "Akun pengguna '{$user->name}' berhasil dinonaktifkan.",
            'data'    => $user->load('roles'),
        ]);
    }

    public function activate($id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'status'  => 'approved',
            'is_read' => true,
        ]);

        if ($user->roles->isEmpty()) {
            $role = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);
            $user->assignRole($role);
        }

        return response()->json([
            'success' => true,
            'message' => "Akun pengguna '{$user->name}' berhasil diaktifkan kembali.",
            'data'    => $user->load('roles'),
        ]);
    }

    /**
     * Tandai notifikasi akun/deaktivasi telah dibaca, lalu redirect ke tabel pengguna dengan query search nama akun.
     */
    public function markAsRead($id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_read' => true]);

        return redirect()->route('manajemenpengguna.users', ['search' => $user->name]);
    }
}
