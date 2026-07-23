<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppFitur extends Model
{
    use HasFactory;

    protected $table = 'app_fiturs';
    protected $guarded = ['id'];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Scope untuk fitur yang aktif
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
