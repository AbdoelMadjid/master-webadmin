<?php

namespace App\Models\PageConfig;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class WebFeature extends Model
{
    use HasFactory;

    protected $table = 'web_features';

    protected $fillable = [
        'feature_key',
        'name',
        'name_en',
        'description',
        'description_en',
        'location',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Helper to check if a website feature is active by feature_key
     */
    public static function isFeatureActive(string $key): bool
    {
        try {
            $activeKeys = Cache::remember('web_features_active_keys', 600, function () {
                return static::where('is_active', true)->pluck('feature_key')->toArray();
            });

            return in_array($key, $activeKeys, true);
        } catch (\Throwable $e) {
            return true; // fallback default open
        }
    }

    /**
     * Clear all feature caches globally
     */
    public static function clearFeatureCache(): void
    {
        Cache::forget('web_features_active_keys');
        $keys = ['intake_button', 'language_switcher', 'login_button', 'search_bar', 'social_media'];
        foreach ($keys as $k) {
            Cache::forget('web_feature_' . $k);
        }
    }

    /**
     * Clear feature cache on save or update
     */
    protected static function booted()
    {
        static::saved(function ($feature) {
            static::clearFeatureCache();
        });

        static::deleted(function ($feature) {
            static::clearFeatureCache();
        });
    }
}
