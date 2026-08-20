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
        'name_en',
        'description',
        'description_en',
        'author',
        'version',
        'thumbnail',
        'view_path',
        'is_active',
        'supports',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'supports' => 'array',
    ];

    /**
     * Get the active frontpage theme record
     */
    public static function getActiveTheme(): ?self
    {
        return static::where('is_active', true)->first();
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