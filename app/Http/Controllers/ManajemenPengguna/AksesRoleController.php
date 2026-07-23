<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\AksesRoleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AksesRoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::with('permissions')->get();
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

        $selectedRoleId = null;
        if ($request->has('role')) {
            $paramRole = strtolower(trim($request->input('role')));
            $matchedRole = $roles->first(fn($r) => strtolower($r->name) === $paramRole);
            if ($matchedRole) {
                $selectedRoleId = $matchedRole->id;
            }
        } elseif ($request->has('role_id')) {
            $selectedRoleId = (int) $request->input('role_id');
        }

        if (!$selectedRoleId && $roles->isNotEmpty()) {
            $selectedRoleId = $roles->first()->id;
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success'           => true,
                'roles'             => $roles,
                'permissions'       => $permissions,
                'matrixPermissions' => $matrixPermissions,
                'selectedRoleId'    => $selectedRoleId,
            ]);
        }

        return view('pages.manajemenpengguna.akses-role', compact('roles', 'permissions', 'matrixPermissions', 'selectedRoleId'));
    }

    public function update(AksesRoleRequest $request)
    {
        $role = Role::findOrFail($request->input('role_id'));
        $permissions = $request->input('permissions', []);

        $role->syncPermissions($permissions);

        return response()->json([
            'success' => true,
            'message' => "Hak akses untuk Role '{$role->name}' berhasil diperbarui.",
            'data'    => $role->load('permissions'),
        ]);
    }
}
