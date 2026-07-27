<?php

namespace App\Traits;

use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;
use Illuminate\Support\Facades\Request;

trait LogsActivityTrait
{
    use LogsActivity;

    /**
     * Set default options for activity logging across models.
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logOnlyDirty()
            ->dontLogEmptyChanges()
            ->useLogName($this->getTable())
            ->setDescriptionForEvent(function (string $eventName) {
                $modelName = class_basename($this);
                return "{$modelName} {$eventName}";
            });
    }

    /**
     * Enrich activity properties with HTTP request metadata (IP, User-Agent, URL).
     */
    public function tapActivity($activity, string $eventName)
    {
        $activity->properties = $activity->properties->merge([
            'ip_address' => Request::ip() ?? '127.0.0.1',
            'user_agent' => Request::userAgent() ?? 'CLI / Console',
            'url'        => Request::fullUrl(),
        ]);
    }
}
