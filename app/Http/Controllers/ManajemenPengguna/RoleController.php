<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\RoleRequest;
use App\Models\Menu;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::withCount(['users', 'permissions'])->with(['users' => function($q) { $q->take(5); }, 'permissions'])->get();
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
