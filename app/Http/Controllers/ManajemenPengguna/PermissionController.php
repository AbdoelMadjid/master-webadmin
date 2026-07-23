<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\PermissionRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $permissions = Permission::with('roles')->get()->map(function ($perm) {
            $parts = explode(' ', $perm->name, 2);
            if (count($parts) === 2) {
                $perm->action_type = strtolower($parts[0]);
                $perm->module_name = $parts[1];
            } else {
                $perm->action_type = 'other';
                $perm->module_name = $perm->name;
            }
            return $perm;
        });

        $roles = Role::all();
        $totalModules = $permissions->pluck('module_name')->unique()->count();
        $unassignedCount = $permissions->filter(fn($p) => $p->roles->isEmpty())->count();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $permissions,
            ]);
        }

        return view('pages.manajemenpengguna.permissions', compact('permissions', 'roles', 'totalModules', 'unassignedCount'));
    }

    public function store(PermissionRequest $request)
    {
        $permission = Permission::create([
            'name'       => strtolower(trim($request->input('name'))),
            'guard_name' => 'web',
        ]);

        if ($request->has('roles')) {
            $permission->syncRoles($request->input('roles'));
        }

        return response()->json([
            'success' => true,
            'message' => "Permission '{$permission->name}' berhasil dibuat.",
            'data'    => $permission->load('roles'),
        ]);
    }

    public function show($id)
    {
        $permission = Permission::with('roles')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data'    => $permission,
        ]);
    }

    public function update(PermissionRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->update([
            'name' => strtolower(trim($request->input('name'))),
        ]);

        if ($request->has('roles')) {
            $permission->syncRoles($request->input('roles'));
        } else {
            $permission->syncRoles([]);
        }

        return response()->json([
            'success' => true,
            'message' => "Permission '{$permission->name}' berhasil diperbarui.",
            'data'    => $permission->load('roles'),
        ]);
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return response()->json([
            'success' => true,
            'message' => "Permission '{$permission->name}' berhasil dihapus.",
        ]);
    }
}
