<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\AksesUserRequest;
use App\Models\Menu;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AksesUserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with(['roles', 'permissions'])->orderBy('name')->get();
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        $allMenus = Menu::getOrderedTree();

        $rolePermissionsMap = [];
        foreach ($roles as $role) {
            $rolePermissionsMap[$role->name] = $role->permissions->pluck('name')->toArray();
        }

        // Group permissions by module for CRUD Matrix
        $rawPermissionsByModule = [];
        foreach ($permissions as $perm) {
            $parts = explode(' ', $perm->name, 2);
            if (count($parts) === 2) {
                $action = strtolower($parts[0]);
                $module = $parts[1];
            } else {
                $action = 'other';
                $module = $perm->name;
            }

            if (!isset($rawPermissionsByModule[$module])) {
                $rawPermissionsByModule[$module] = [
                    'create' => null,
                    'read'   => null,
                    'update' => null,
                    'delete' => null,
                    'custom' => [],
                ];
            }

            if (in_array($action, ['create', 'read', 'update', 'delete'])) {
                $rawPermissionsByModule[$module][$action] = $perm->name;
            } else {
                $rawPermissionsByModule[$module]['custom'][] = [
                    'action' => $action,
                    'name'   => $perm->name,
                ];
            }
        }

        $matrixPermissions = [];
        $processedModules = [];

        // 1. Map ordered menu tree first to maintain exact menu hierarchy
        foreach ($allMenus as $menu) {
            $moduleKey = $menu->url;
            if (!$moduleKey) {
                continue;
            }

            $actions = $rawPermissionsByModule[$moduleKey] ?? [
                'create' => null,
                'read'   => null,
                'update' => null,
                'delete' => null,
                'custom' => [],
            ];

            $matrixPermissions[$moduleKey] = array_merge($actions, [
                'module'        => $moduleKey,
                'menu_name'     => $menu->name,
                'depth'         => $menu->depth ?? 0,
                'icon'          => $menu->icon,
                'paths'         => $menu->paths ?? 0,
                'parent_name'   => $menu->parentMenu?->name,
                'parent_module' => $menu->parentMenu?->url,
                'category'      => $menu->category,
            ]);
            $processedModules[$moduleKey] = true;
        }

        // 2. Append orphan permission modules not directly tied to a menu item
        foreach ($rawPermissionsByModule as $moduleKey => $actions) {
            if (!isset($processedModules[$moduleKey])) {
                $slashCount = substr_count($moduleKey, '/');
                $depth = min($slashCount, 2);

                $nameParts = explode('/', $moduleKey);
                $displayName = Str::title(str_replace(['-', '_'], ' ', end($nameParts)));
                $parentName = count($nameParts) > 1 ? Str::title(str_replace(['-', '_'], ' ', $nameParts[count($nameParts) - 2])) : null;
                $parentModule = count($nameParts) > 1 ? implode('/', array_slice($nameParts, 0, count($nameParts) - 1)) : null;

                $matrixPermissions[$moduleKey] = array_merge($actions, [
                    'module'        => $moduleKey,
                    'menu_name'     => $displayName,
                    'depth'         => $depth,
                    'icon'          => null,
                    'paths'         => 0,
                    'parent_name'   => $parentName,
                    'parent_module' => $parentModule,
                    'category'      => null,
                ]);
                $processedModules[$moduleKey] = true;
            }
        }

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
