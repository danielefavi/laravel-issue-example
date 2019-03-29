<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    public static function boot()
    {
        parent::boot();

        static::saving(function ($item)  {
            dd('saving on SYNC!');
            dd($item);
        });
    }
}
