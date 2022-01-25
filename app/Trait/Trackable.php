<?php

namespace App\Trait;

use App\Models\Change;

trait Trackable
{
    public static function boot()
    {
        parent::boot();

        self::updating(function ($model) {
            $change = new Change();
            $change->changeable_id = $model->id;

            $change->changeable_type = get_class($model->getRelated());
            $change->from = $model;

            $change->save();
        });

        self::updated(function ($model) {
            $change = $model->changes()->latest()->first();
            $change->to = $model;

            $change->save();
        });
    }
    public function changes()
    {
        return $this->morphMany(Change::class, 'changeable');
    }
}
