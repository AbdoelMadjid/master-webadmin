<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'points',
        'last_activity_at',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'last_activity_at' => 'datetime',
        ];
    }

    /**
     * Accessor untuk mendapatkan URL lengkap avatar user
     */
    public function getAvatarUrlAttribute(): string
    {
        if (function_exists('getUserAvatarUrl')) {
            return getUserAvatarUrl($this);
        }

        if ($this->avatar) {
            if (str_starts_with($this->avatar, 'http://') || str_starts_with($this->avatar, 'https://')) {
                return $this->avatar;
            }
            return asset($this->avatar);
        }

        return asset('assets/media/svg/avatars/default-avatar.svg');
    }

    /**
     * Riwayat login user
     */
    public function dataLogins(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\AppSupport\DataLogin::class, 'user_id');
    }

    /**
     * Boot model events for automatic cascading deletion of related records.
     */
    protected static function booted(): void
    {
        static::deleting(function (User $user) {
            // 1. Hapus berkas fisik avatar pengguna jika ada
            if ($user->avatar) {
                if (\Illuminate\Support\Facades\Storage::disk('public')->exists($user->avatar)) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($user->avatar);
                }
                $publicPath = public_path($user->avatar);
                if (file_exists($publicPath) && is_file($publicPath)) {
                    @unlink($publicPath);
                }
            }

            // 2. Hapus seluruh riwayat data login pengguna (data_logins)
            $user->dataLogins()->delete();

            // 3. Hapus seluruh permintaan reset password pengguna (password_reset_requests)
            \App\Models\ManajemenPengguna\PasswordResetRequest::where('user_id', $user->id)
                ->orWhere('email', $user->email)
                ->delete();

            // 4. Update rujukan admin penangan reset password jika admin dihapus
            \App\Models\ManajemenPengguna\PasswordResetRequest::where('handled_by', $user->id)
                ->update(['handled_by' => null]);

            // 5. Lepas seluruh relasi Spatie Roles & Permissions (model_has_roles & model_has_permissions)
            $user->roles()->detach();
            $user->permissions()->detach();
        });
    }

    /**
     * Cek apakah akun user sudah disetujui
     */
    public function isApproved(): bool
    {
        return ($this->status ?? 'approved') === 'approved';
    }

    /**
     * Cek apakah akun user sedang menunggu persetujuan
     */
    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    /**
     * Cek apakah akun user ditolak
     */
    public function isRejected(): bool
    {
        return $this->status === 'rejected';
    }
}
