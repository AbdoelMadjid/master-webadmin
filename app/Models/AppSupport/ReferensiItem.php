<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\LogsActivityTrait;

class ReferensiItem extends Model
{
    use HasFactory, LogsActivityTrait;

    protected $table = 'referensi_item';

    protected $fillable = [
        'kategori_id',
        'kode',
        'nama',
        'urutan',
        'keterangan',
        'is_active',
    ];

    protected $casts = [
        'urutan' => 'integer',
        'is_active' => 'boolean',
    ];

    /**
     * Relationship to parent category.
     */
    public function kategori()
    {
        return $this->belongsTo(ReferensiKategori::class, 'kategori_id');
    }
}
