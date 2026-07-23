<?php

namespace App\Http\Controllers\ManajemenPengguna;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManajemenPengguna\UserRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
}
