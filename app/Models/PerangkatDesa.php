<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->uuid) {
                $model->uuid = Str::uuid(); 
            }
        });
    }
}
