<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AppProfil extends Model
{
    use HasFactory;

    protected $table = 'app_profils';
    protected $guarded = ['id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Accessor untuk URL logo utama (horizontal / panjang)
     */
    public function getLogoUrlAttribute(): ?string
    {
        if ($this->logo && Storage::disk('public')->exists($this->logo)) {
            return Storage::disk('public')->url($this->logo);
        }

        return null;
    }

    /**
     * Accessor untuk URL logo ringkas (kotak / small icon sidebar minimize)
     */
    public function getLogoSmallUrlAttribute(): ?string
    {
        if ($this->logo_small && Storage::disk('public')->exists($this->logo_small)) {
            return Storage::disk('public')->url($this->logo_small);
        }

        return null;
    }

    /**
     * Accessor untuk URL favicon (shortcut icon browser)
     */
    public function getFaviconUrlAttribute(): ?string
    {
        if ($this->favicon && Storage::disk('public')->exists($this->favicon)) {
            return Storage::disk('public')->url($this->favicon);
        }

        return null;
    }

    /**
     * Scope untuk mendapatkan profil aplikasi yang aktif
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
