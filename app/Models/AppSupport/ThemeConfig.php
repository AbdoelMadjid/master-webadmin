<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Services\WebsiteTemplateService;

class ThemeConfig extends Model
{
    use HasFactory;

    protected $table = 'theme_configs';

    protected $fillable = [
        'theme_frontpage_id',
        'logo_default',
        'logo_sticky',
        'logo_footer',
        'header_menu',
        'footer_menu',
    ];

    protected $casts = [
        'header_menu' => 'array',
        'footer_menu' => 'array',
    ];

    protected static function booted()
    {
        static::saved(function () {
            WebsiteTemplateService::clearCache();
        });

        static::deleted(function () {
            WebsiteTemplateService::clearCache();
        });
    }

    /**
     * Relationship to ThemeFrontpage
     */
    public function themeFrontpage()
    {
        return $this->belongsTo(ThemeFrontpage::class, 'theme_frontpage_id');
    }

    /**
     * Accessor for default header logo URL
     */
    public function getLogoDefaultUrlAttribute(): string
    {
        if ($this->logo_default) {
            $path = ltrim($this->logo_default, '/');
            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                return $path;
            }
            if (file_exists(public_path($path))) {
                return asset($path);
            }
            if (Storage::disk('public')->exists($path) || file_exists(public_path('storage/' . $path))) {
                return asset('storage/' . $path);
            }
            return asset($path);
        }

        return template_asset('images/logos/landing.svg');
    }

    /**
     * Accessor for sticky header logo URL
     */
    public function getLogoStickyUrlAttribute(): string
    {
        if ($this->logo_sticky) {
            $path = ltrim($this->logo_sticky, '/');
            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                return $path;
            }
            if (file_exists(public_path($path))) {
                return asset($path);
            }
            if (Storage::disk('public')->exists($path) || file_exists(public_path('storage/' . $path))) {
                return asset('storage/' . $path);
            }
            return asset($path);
        }

        return template_asset('images/logos/landing-dark.svg');
    }

    /**
     * Accessor for footer logo URL
     */
    public function getLogoFooterUrlAttribute(): string
    {
        if ($this->logo_footer) {
            $path = ltrim($this->logo_footer, '/');
            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                return $path;
            }
            if (file_exists(public_path($path))) {
                return asset($path);
            }
            if (Storage::disk('public')->exists($path) || file_exists(public_path('storage/' . $path))) {
                return asset('storage/' . $path);
            }
            return asset($path);
        }

        return template_asset('images/logos/landing.svg');
    }

    /**
     * Accessor for parsed header menu list with fallback
     */
    public function getHeaderMenuListAttribute(): array
    {
        if (is_array($this->header_menu) && !empty($this->header_menu)) {
            return $this->header_menu;
        }

        return [
            ['title' => 'Home', 'url' => '#kt_body', 'target' => '_self', 'feature_file' => ''],
            ['title' => 'How it Works', 'url' => '#how-it-works', 'target' => '_self', 'feature_file' => '_how-it-works'],
            ['title' => 'Achievements', 'url' => '#achievements', 'target' => '_self', 'feature_file' => '_statistics'],
            ['title' => 'Team', 'url' => '#team', 'target' => '_self', 'feature_file' => '_team'],
            ['title' => 'Portfolio', 'url' => '#portfolio', 'target' => '_self', 'feature_file' => '_projects'],
            ['title' => 'Pricing', 'url' => '#pricing', 'target' => '_self', 'feature_file' => '_pricing'],
        ];
    }

    /**
     * Accessor for parsed footer menu list with fallback (distinct from header)
     */
    public function getFooterMenuListAttribute(): array
    {
        if (is_array($this->footer_menu) && !empty($this->footer_menu)) {
            return $this->footer_menu;
        }

        return [
            ['title' => 'About', 'url' => '#how-it-works', 'target' => '_self'],
            ['title' => 'Support', 'url' => '#team', 'target' => '_self'],
            ['title' => 'Purchase', 'url' => '#pricing', 'target' => '_self'],
        ];
    }
}
