<?php

namespace App\Models\PageConfig;

use App\Traits\LogsActivityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class WebsiteProfile extends Model
{
    use HasFactory, LogsActivityTrait;

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
        'social_links',
        'template_slug',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'social_links' => 'array',
    ];

    public static function clearProfileCache(): void
    {
        Cache::forget('web_active_profile');
    }

    protected static function booted()
    {
        static::saved(function ($profile) {
            static::clearProfileCache();
        });

        static::deleted(function ($profile) {
            static::clearProfileCache();
        });
    }

    /**
     * Get default social links configuration
     */
    public static function getDefaultSocialLinks(): array
    {
        return [
            'twitter' => [
                'name' => 'Twitter / X',
                'icon' => 'fab fa-twitter',
                'url' => 'https://twitter.com',
                'is_active' => true,
            ],
            'facebook' => [
                'name' => 'Facebook',
                'icon' => 'fab fa-facebook-f',
                'url' => 'https://facebook.com',
                'is_active' => true,
            ],
            'instagram' => [
                'name' => 'Instagram',
                'icon' => 'fab fa-instagram',
                'url' => 'https://instagram.com',
                'is_active' => true,
            ],
            'youtube' => [
                'name' => 'YouTube',
                'icon' => 'fab fa-youtube',
                'url' => 'https://youtube.com',
                'is_active' => true,
            ],
            'linkedin' => [
                'name' => 'LinkedIn',
                'icon' => 'fab fa-linkedin-in',
                'url' => 'https://linkedin.com',
                'is_active' => true,
            ],
        ];
    }

    /**
     * Get active profile instance or fallback with caching
     */
    public static function getActiveProfile()
    {
        return Cache::remember('web_active_profile', 86400, function () {
            $profile = static::where('is_active', true)->first();

            if (!$profile) {
                return new static([
                    'name' => 'Universitas Unify',
                    'name_en' => 'University of Unify',
                    'established_year' => '1978',
                    'logo' => 'assets/img/logo/logo.png',
                    'logo_mini' => 'assets/img/logo/logo-mini.png',
                    'address' => 'Kingston, Ontario, Kanada',
                    'address_en' => 'Kingston, Ontario, Canada',
                    'copyright_text' => 'Universitas Unify - Sejak 1978',
                    'copyright_text_en' => 'University of Unify since 1978',
                    'social_links' => static::getDefaultSocialLinks(),
                    'template_slug' => 'default',
                ]);
            }

            if (empty($profile->social_links)) {
                $profile->social_links = static::getDefaultSocialLinks();
            } else {
                $defaultMeta = static::getDefaultSocialLinks();
                $links = $profile->social_links;
                foreach ($defaultMeta as $key => $meta) {
                    if (!isset($links[$key])) {
                        $links[$key] = $meta;
                    } else {
                        $links[$key]['name'] = $meta['name'];
                        $links[$key]['icon'] = $meta['icon'];
                    }
                }
                $profile->social_links = $links;
            }

            return $profile;
        });
    }
}
