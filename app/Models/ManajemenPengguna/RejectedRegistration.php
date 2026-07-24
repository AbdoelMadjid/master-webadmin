<?php

namespace App\Models\ManajemenPengguna;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'rejected_at',
    ];

    protected $casts = [
        'rejected_at' => 'datetime',
    ];
}
