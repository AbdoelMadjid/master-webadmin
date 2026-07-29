<?php

namespace App\Models\PageConfig\MenuWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FooterNavigation extends Model
{
    use HasFactory;

    protected $table = 'web_footer_navigations';

    protected $fillable = [
        'main_navigation_id',
        'column',
        'title',
        'title_en',
        'url',
        'target',
        'order',
        'is_active',
        'is_external',
    ];

    protected $casts = [
        'column' => 'integer',
        'order' => 'integer',
        'is_active' => 'boolean',
        'is_external' => 'boolean',
    ];

    /**
     * Linked Main Navigation item
     */
    public function mainNavigation(): BelongsTo
    {
        return $this->belongsTo(MainNavigation::class, 'main_navigation_id');
    }

    /**
     * Scope active items
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope specific column (1 to 4)
     */
    public function scopeColumn($query, int $column)
    {
        return $query->where('column', $column);
    }

    /**
     * Scope ordered
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('column', 'asc')->orderBy('order', 'asc');
    }
}
