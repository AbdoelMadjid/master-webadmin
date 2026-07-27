<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\AksesUserRequest;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AksesUserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with(['roles', 'permissions'])->orderBy('name')->get();
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();

        $rolePermissionsMap = [];
        foreach ($roles as $role) {
            $rolePermissionsMap[$role->name] = $role->permissions->pluck('name')->toArray();
        }

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

        // Sort matrix keys alphabetically by module name
        ksort($matrixPermissions);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $users,
            ]);
        }

        return view('pages.manajemenpengguna.akses-user', compact('users', 'roles', 'permissions', 'matrixPermissions', 'rolePermissionsMap'));
    }

    public function show($id)
    {
        $user = User::with(['roles', 'permissions'])->findOrFail($id);

        $directPermissions = $user->getDirectPermissions()->pluck('name')->toArray();
        $rolePermissions   = $user->getPermissionsViaRoles()->pluck('name')->unique()->toArray();
        $allPermissions    = $user->getAllPermissions()->pluck('name')->toArray();

        $roles = Role::with('permissions')->get();
        $rolePermissionsMap = [];
        foreach ($roles as $role) {
            $rolePermissionsMap[$role->name] = $role->permissions->pluck('name')->toArray();
        }

        return response()->json([
            'success'              => true,
            'data'                 => array_merge($user->toArray(), [
                'avatar_url' => $user->avatar_url,
            ]),
            'assigned_roles'       => $user->roles->pluck('name'),
            'direct_permissions'   => $directPermissions,
            'role_permissions'     => $rolePermissions,
            'all_permissions'      => $allPermissions,
            'role_permissions_map' => $rolePermissionsMap,
        ]);
    }

    public function update(AksesUserRequest $request)
    {
        $user = User::findOrFail($request->input('user_id'));

        $roles = $request->input('roles', []);
        $permissions = $request->input('permissions', []);

        $user->syncRoles($roles);
        $user->syncPermissions($permissions);

        return response()->json([
            'success' => true,
            'message' => "Hak akses pengguna '{$user->name}' berhasil diperbarui.",
            'data'    => $user->load(['roles', 'permissions']),
        ]);
    }
}
