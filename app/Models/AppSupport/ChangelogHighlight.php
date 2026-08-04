<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChangelogHighlight extends Model
{
    protected $table = 'changelog_highlights';

    protected $fillable = [
        'changelog_id',
        'type',
        'label',
        'desc',
    ];

    /**
     * Parent release version relationship.
     */
    public function changelog(): BelongsTo
    {
        return $this->belongsTo(Changelog::class, 'changelog_id');
    }
}
