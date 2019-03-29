<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    public static function boot()
    {
        parent::boot();

        static::attaching(function ($item) {
            dd('syncing event has been fired!');
        });
    }
}
