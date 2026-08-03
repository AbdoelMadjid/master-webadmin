<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\AksesRoleRequest;
use App\Models\Menu;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AksesRoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        $allMenus = Menu::getOrderedTree();

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
