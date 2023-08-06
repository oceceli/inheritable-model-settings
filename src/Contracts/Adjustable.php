<?php

namespace Oceceli\InheritableModelSettings\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Oceceli\InheritableModelSettings\Models\Setting;

interface Adjustable
{
    public function settings() : MorphMany;
    public function getSetting($key, $default = null) : ?string;
    public function getSettingVerbose($key) : array;
    public function setSetting($key, $value) : Setting;
    public function deleteSetting($key) : void;
}