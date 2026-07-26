<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiKategori extends Model
{
    use HasFactory;

    protected $table = 'referensi_kategori';

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi',
        'is_active',
        'is_system',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_system' => 'boolean',
    ];

    /**
     * Relationship to reference items.
     */
    public function items()
    {
        return $this->hasMany(ReferensiItem::class, 'kategori_id')->orderBy('urutan', 'asc')->orderBy('nama', 'asc');
    }

    /**
     * Active reference items.
     */
    public function activeItems()
    {
        return $this->hasMany(ReferensiItem::class, 'kategori_id')
            ->where('is_active', true)
            ->orderBy('urutan', 'asc')
            ->orderBy('nama', 'asc');
    }
}
