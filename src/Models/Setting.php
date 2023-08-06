<?php

namespace Oceceli\InheritableModelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'inheritable_model_settings';
    protected $guarded = [];

    public function model()
    {
        return $this->morphTo();
    }
}
