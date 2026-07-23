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
