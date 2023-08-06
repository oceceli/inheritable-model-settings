<?php

namespace Oceceli\InheritableModelSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Oceceli\InheritableModelSettings\InheritableModelSettings
 */
class InheritableModelSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Oceceli\InheritableModelSettings\InheritableModelSettings::class;
    }
}
