<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeFrontpage extends Model
{
    use HasFactory;

    protected $table = 'theme_frontpages';

    protected $fillable = [
        'slug',
        'name',
        'thumbnail',
        'view_path',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Accessor untuk URL thumbnail gambar tema
     */
    public function getThumbnailUrlAttribute(): string
    {
        if ($this->thumbnail) {
            $path = ltrim($this->thumbnail, '/');
            if (file_exists(public_path($path))) {
                return asset($path);
            }
            if (file_exists(public_path('storage/' . $path))) {
                return asset('storage/' . $path);
            }
            return asset($path);
        }

        return asset('assets/media/logos/landing.svg');
    }

    /**
     * Relationship to ThemeConfig
     */
    public function config()
    {
        return $this->hasOne(ThemeConfig::class, 'theme_frontpage_id');
    }

    /**
     * Get the active frontpage theme record
     */
    public static function getActiveTheme(): ?self
    {
        return static::with('config')->where('is_active', true)->first();
    }

    /**
     * Set selected theme as active and deactivate all others
     */
    public function setAsActive(): bool
    {
        static::where('id', '!=', $this->id)->update(['is_active' => false]);
        $this->is_active = true;
        return $this->save();
    }
}