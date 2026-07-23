<?php

namespace App\Models\AppSupport;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataLogin extends Model
{
    use HasFactory;

    protected $table = 'data_logins';

    protected $fillable = [
        'user_id',
        'login_at',
        'ip_address',
        'user_agent',
        'latitude',
        'longitude',
        'location',
        'point_awarded',
        'login_count',
    ];

    protected $casts = [
        'login_at'      => 'datetime',
        'latitude'      => 'float',
        'longitude'     => 'float',
        'point_awarded' => 'boolean',
        'login_count'   => 'integer',
    ];

    /**
     * Relationship to User model
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
