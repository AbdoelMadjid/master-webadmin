<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\RoleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::withCount(['users', 'permissions'])->with(['users' => function($q) { $q->take(5); }, 'permissions'])->get();
        $permissions = Permission::all();

        // Group permissions by module for CRUD Matrix
        $matrixPermissions = [];
        foreach ($permissions as $perm) {
            $parts = explode(' ', $perm->name, 2);
            if (count($parts) === 2) {
                $action = strtolower($parts[0]);
                $module = $parts[1];
            } else {
                $action = 'other';
                $module = $perm->name;
            }

            if (!isset($matrixPermissions[$module])) {
                $matrixPermissions[$module] = [
                    'create' => null,
                    'read'   => null,
                    'update' => null,
                    'delete' => null,
                    'custom' => [],
                ];
            }

            if (in_array($action, ['create', 'read', 'update', 'delete'])) {
                $matrixPermissions[$module][$action] = $perm->name;
            } else {
                $matrixPermissions[$module]['custom'][] = [
                    'action' => $action,
                    'name'   => $perm->name,
                ];
            }
        }

        ksort($matrixPermissions);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success'           => true,
                'data'              => $roles,
                'matrixPermissions' => $matrixPermissions,
            ]);
        }

        return view('pages.manajemenpengguna.roles', compact('roles', 'permissions', 'matrixPermissions'));
    }

    public function store(RoleRequest $request)
    {
        $role = Role::create([
            'name'       => strtolower(trim($request->input('name'))),
            'guard_name' => 'web',
        ]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->input('permissions'));
        }

        return response()->json([
            'success' => true,
            'message' => "Role '{$role->name}' berhasil dibuat.",
            'data'    => $role->load('permissions'),
        ]);
    }

    public function show($id)
    {
        $role = Role::with('permissions')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data'    => $role,
        ]);
    }

    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update([
            'name' => strtolower(trim($request->input('name'))),
        ]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->input('permissions'));
        } else {
            $role->syncPermissions([]);
        }

        return response()->json([
            'success' => true,
            'message' => "Role '{$role->name}' berhasil diperbarui.",
            'data'    => $role->load('permissions'),
        ]);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if ($role->name === 'admin') {
            return response()->json([
                'success' => false,
                'message' => 'Role admin bawaan sistem tidak boleh dihapus.',
            ], 422);
        }

        $role->delete();

        return response()->json([
            'success' => true,
            'message' => "Role '{$role->name}' berhasil dihapus.",
        ]);
    }
}
