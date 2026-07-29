<?php

namespace App\Models\PageConfig\MenuWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TopNavigation extends Model
{
    use HasFactory;

    protected $table = 'web_top_navigations';

    protected $fillable = [
        'parent_id',
        'title',
        'title_en',
        'url',
        'target',
        'icon',
        'order',
        'is_active',
        'is_external',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_active' => 'boolean',
        'is_external' => 'boolean',
    ];

    /**
     * Parent navigation item
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(TopNavigation::class, 'parent_id');
    }

    /**
     * Child navigation items
     */
    public function children(): HasMany
    {
        return $this->hasMany(TopNavigation::class, 'parent_id')->orderBy('order', 'asc');
    }

    /**
     * Scope active items
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope parent top level items
     */
    public function scopeParentOnly($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Scope ordered
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
