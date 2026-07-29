<?php

namespace App\Models\PageContent;

use App\Traits\LogsActivityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CallToAction extends Model
{
    use HasFactory, LogsActivityTrait;

    protected $table = 'web_call_to_actions';

    protected $fillable = [
        'title',
        'title_en',
        'description',
        'description_en',
        'primary_button_text',
        'primary_button_text_en',
        'primary_button_url',
        'secondary_button_text',
        'secondary_button_text_en',
        'secondary_button_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public static function clearCtaCache(): void
    {
        Cache::forget('web_has_cta_records');
        Cache::forget('web_active_cta');
    }

    protected static function booted()
    {
        static::saved(function ($cta) {
            static::clearCtaCache();
        });

        static::deleted(function ($cta) {
            static::clearCtaCache();
        });
    }
}
