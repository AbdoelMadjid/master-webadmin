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
        $allPermissions = Permission::with('roles')->get();
        $roles = Role::all();

        $modules = $allPermissions->groupBy(function ($perm) {
            $parts = explode(' ', $perm->name, 2);
            return count($parts) === 2 ? strtolower($parts[1]) : strtolower($perm->name);
        })->map(function ($group, $moduleName) {
            $actions = $group->map(function ($perm) {
                $parts = explode(' ', $perm->name, 2);
                return (object) [
                    'id'          => $perm->id,
                    'name'        => $perm->name,
                    'action_type' => count($parts) === 2 ? strtolower($parts[0]) : 'other',
                ];
            })->sortBy(function ($act) {
                return match($act->action_type) {
                    'create' => 1,
                    'read'   => 2,
                    'update' => 3,
                    'delete' => 4,
                    default  => 5,
                };
            })->values();

            $allRoles = $group->pluck('roles')->flatten()->pluck('name')->unique()->values();

            return (object) [
                'module_name' => $moduleName,
                'actions'     => $actions,
                'roles'       => $allRoles,
                'total_perms' => $group->count(),
                'created_at'  => $group->max('created_at'),
            ];
        })->sortBy('module_name')->values();

        $totalPermissions = $allPermissions->count();
        $totalModules = $modules->count();
        $unassignedCount = $modules->filter(fn($m) => $m->roles->isEmpty())->count();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $modules,
            ]);
        }

        return view('pages.manajemenpengguna.permissions', compact('modules', 'roles', 'totalPermissions', 'totalModules', 'unassignedCount'));
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

    public function storeBatch(Request $request)
    {
        $request->validate([
            'module_name' => 'required|string|max:255',
            'actions'     => 'required|array|min:1',
            'actions.*'   => 'string',
            'roles'       => 'nullable|array',
            'roles.*'     => 'string|exists:roles,name',
        ], [
            'module_name.required' => 'Nama Modul / Fitur wajib diisi.',
            'actions.required'     => 'Pilih minimal 1 jenis aksi (Create, Read, Update, Delete).',
        ]);

        $rawModule = strtolower(trim($request->input('module_name')));
        $moduleName = str_replace(' ', '-', $rawModule);
        $actions = $request->input('actions', []);
        $roles = $request->input('roles', []);

        $createdPermissions = [];

        foreach ($actions as $action) {
            $actionClean = strtolower(trim($action));
            $permName = "{$actionClean} {$moduleName}";

            $permission = Permission::firstOrCreate([
                'name'       => $permName,
                'guard_name' => 'web',
            ]);

            if (!empty($roles)) {
                $permission->syncRoles($roles);
            }

            $createdPermissions[] = $permName;
        }

        $count = count($createdPermissions);

        return response()->json([
            'success' => true,
            'message' => "Berhasil membuat {$count} permission untuk modul '{$moduleName}'.",
            'data'    => $createdPermissions,
        ]);
    }

    public function getModuleData($module)
    {
        $decodedModule = base64_decode($module);

        $permissions = Permission::with('roles')->get()->filter(function ($perm) use ($decodedModule) {
            $parts = explode(' ', $perm->name, 2);
            $moduleName = count($parts) === 2 ? $parts[1] : $perm->name;
            return strtolower($moduleName) === strtolower($decodedModule);
        });

        if ($permissions->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Modul tidak ditemukan.',
            ], 404);
        }

        $existingActions = [];
        $assignedRoles = [];

        foreach ($permissions as $perm) {
            $parts = explode(' ', $perm->name, 2);
            if (count($parts) === 2) {
                $existingActions[] = strtolower($parts[0]);
            }
            foreach ($perm->roles as $role) {
                $assignedRoles[] = $role->name;
            }
        }

        return response()->json([
            'success'          => true,
            'module_name'      => $decodedModule,
            'existing_actions' => array_values(array_unique($existingActions)),
            'assigned_roles'   => array_values(array_unique($assignedRoles)),
        ]);
    }

    public function updateModule(Request $request)
    {
        $request->validate([
            'module_name' => 'required|string|max:255',
            'actions'     => 'required|array|min:1',
            'actions.*'   => 'string',
            'roles'       => 'nullable|array',
            'roles.*'     => 'string|exists:roles,name',
        ], [
            'module_name.required' => 'Nama Modul / Fitur wajib diisi.',
            'actions.required'     => 'Pilih minimal 1 jenis aksi (Create, Read, Update, Delete).',
        ]);

        $rawModule = strtolower(trim($request->input('module_name')));
        $moduleName = str_replace(' ', '-', $rawModule);
        $actions = $request->input('actions', []);
        $roles = $request->input('roles', []);

        foreach ($actions as $action) {
            $actionClean = strtolower(trim($action));
            $permName = "{$actionClean} {$moduleName}";

            $permission = Permission::firstOrCreate([
                'name'       => $permName,
                'guard_name' => 'web',
            ]);

            $permission->syncRoles($roles);
        }

        return response()->json([
            'success' => true,
            'message' => "Berhasil memperbarui seluruh hak akses CRUD untuk modul '{$moduleName}'.",
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

    public function destroyModule($module)
    {
        $decodedModule = base64_decode($module);

        $permissions = Permission::get()->filter(function ($perm) use ($decodedModule) {
            $parts = explode(' ', $perm->name, 2);
            $moduleName = count($parts) === 2 ? $parts[1] : $perm->name;
            return strtolower($moduleName) === strtolower($decodedModule);
        });

        $count = $permissions->count();
        foreach ($permissions as $perm) {
            $perm->delete();
        }

        return response()->json([
            'success' => true,
            'message' => "Berhasil menghapus seluruh {$count} permission modul '{$decodedModule}'.",
        ]);
    }
}
