<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];



    public static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            dd('updating event has been fired!');
        });
    }



    public function users()
    {
        return $this->belongsToMany(\App\User::class)->using(\App\ProjectUser::class);
    }
}
