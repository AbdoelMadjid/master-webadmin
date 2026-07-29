<?php

namespace App\Models\PageContent;

use App\Traits\LogsActivityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SlideBanner extends Model
{
    use HasFactory, LogsActivityTrait;

    protected $table = 'web_slide_banners';

    protected $fillable = [
        'title_prefix',
        'title_prefix_en',
        'title_highlight',
        'title_highlight_en',
        'description',
        'description_en',
        'image_url',
        'button_text',
        'button_text_en',
        'button_url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('id', 'asc');
    }

    public static function clearBannerCache(): void
    {
        Cache::forget('web_slide_banners');
    }

    protected static function booted()
    {
        static::saved(function ($banner) {
            static::clearBannerCache();
        });

        static::deleted(function ($banner) {
            static::clearBannerCache();
        });
    }
}
