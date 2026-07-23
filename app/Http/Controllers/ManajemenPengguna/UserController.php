<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\UserRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
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
        $users = User::with('roles')->orderBy('created_at', 'desc')->get();
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

        if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => "Pengguna '{$user->name}' berhasil dihapus.",
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
                'name'     => $name,
                'email'    => $email,
                'password' => Hash::make($password),
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
}
