<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    public static function boot()
    {
        parent::boot();

        $events = [
            'retrieved', 'creating', 'created', 'updating', 'updated',
            'saving', 'saved', // 'restoring', 'restored',
            'deleting', 'deleted', // 'forceDeleted',
        ];

        foreach($events as $event) {
            static::$event(function ($item) use ($event) {
                echo "<b>{$event}</b> has been fired!<br>";
            });
        }

        // static::saving(function ($item)  {
        //     dd($item);
        // });
    }
}
