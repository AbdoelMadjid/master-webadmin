<?php

namespace App\Models\PageConfig;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteProfile extends Model
{
    use HasFactory;

    protected $table = 'web_profiles';

    protected $fillable = [
        'name',
        'name_en',
        'established_year',
        'logo',
        'logo_mini',
        'favicon',
        'address',
        'address_en',
        'phone',
        'email',
        'copyright_text',
        'copyright_text_en',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get active profile instance or fallback
     */
    public static function getActiveProfile()
    {
        return static::where('is_active', true)->first() ?? new static([
            'name' => 'Universitas Unify',
            'name_en' => 'University of Unify',
            'established_year' => '1978',
            'logo' => 'assets/img/logo/logo.png',
            'logo_mini' => 'assets/img/logo/logo-mini.png',
            'address' => 'Kingston, Ontario, Kanada',
            'address_en' => 'Kingston, Ontario, Canada',
            'copyright_text' => 'Sakola Repalogic - Sejak 1978',
            'copyright_text_en' => 'University of Unify since 1978',
        ]);
    }
}
