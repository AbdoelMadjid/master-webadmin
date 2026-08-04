<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChangelogCommit extends Model
{
    protected $table = 'changelog_commits';

    protected $fillable = [
        'changelog_id',
        'hash',
        'date',
        'msg',
    ];

    /**
     * Parent release version relationship.
     */
    public function changelog(): BelongsTo
    {
        return $this->belongsTo(Changelog::class, 'changelog_id');
    }
}
