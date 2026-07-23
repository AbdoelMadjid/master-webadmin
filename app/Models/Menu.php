<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'meta' => 'array',
    ];

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'main_menu_id')->orderBy('orders', 'asc');
    }

    public function parentMenu()
    {
        return $this->belongsTo(Menu::class, 'main_menu_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'menu_permission', 'menu_id', 'permission_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * Dapatkan semua menu terurut secara hierarkis (Kategori -> Main Menu -> Sub Menu)
     */
    public static function getOrderedTree()
    {
        $all = static::with(['subMenus', 'permissions', 'parentMenu'])->get();

        $customOrder = array_keys(config('menu_seeder.categories', []));
        $categories = $all->pluck('category')->filter()->unique()->values();

        if (!empty($customOrder)) {
            $preferredOrder = array_values(array_unique($customOrder));
            $categories = $categories->sort(function ($a, $b) use ($preferredOrder) {
                $ai = array_search($a, $preferredOrder, true);
                $bi = array_search($b, $preferredOrder, true);
                $ai = $ai === false ? PHP_INT_MAX : $ai;
                $bi = $bi === false ? PHP_INT_MAX : $bi;
                return $ai <=> $bi ?: strcmp((string) $a, (string) $b);
            })->values();
        } else {
            $categories = $categories->sort()->values();
        }

        $result = collect();

        foreach ($categories as $category) {
            $catMenus = $all->where('category', $category);

            // Main menus under this category
            $mainMenus = $catMenus->whereNull('main_menu_id')->sortBy('orders')->values();

            foreach ($mainMenus as $main) {
                $result->push($main);

                // Sub menus of this main menu
                $subMenus = $catMenus->where('main_menu_id', $main->id)->sortBy('orders')->values();
                foreach ($subMenus as $sub) {
                    $result->push($sub);
                }
            }

            // Orphan submenus under this category
            $processedIds = $result->pluck('id')->all();
            $orphans = $catMenus->whereNotIn('id', $processedIds)->sortBy('orders')->values();
            foreach ($orphans as $orphan) {
                $result->push($orphan);
            }
        }

        // Remaining uncategorized menus
        $processedIds = $result->pluck('id')->all();
        $remaining = $all->whereNotIn('id', $processedIds)->sortBy('orders')->values();
        foreach ($remaining as $rem) {
            $result->push($rem);
        }

        return $result;
    }
}
