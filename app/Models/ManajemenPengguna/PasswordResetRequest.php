<?php

namespace App\Models\ManajemenPengguna;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasswordResetRequest extends Model
{
    use HasFactory;

    protected $table = 'password_reset_requests';

    protected $fillable = [
        'user_id',
        'email',
        'status',
        'is_read',
        'admin_notes',
        'handled_by',
        'handled_at',
    ];

    protected $casts = [
        'is_read'    => 'boolean',
        'handled_at' => 'datetime',
    ];

    /**
     * Relationship to User requesting reset
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship to Admin who handled the request
     */
    public function handler(): BelongsTo
    {
        return $this->belongsTo(User::class, 'handled_by');
    }
}
