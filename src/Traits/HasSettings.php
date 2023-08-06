<?php

namespace Oceceli\InheritableModelSettings\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Oceceli\InheritableModelSettings\Contracts\Adjustable;
use Oceceli\InheritableModelSettings\Models\Setting;

trait HasSettings
{   
    public function settings() : MorphMany
    {
        return $this->morphMany(Setting::class, 'model');
    }

    public function getSetting($key, $default = null, $inherit = true) : ?string
    {
        if($setting = $this->settings->where('key', $key)->first()) {
            return $setting->value;
        }

        if($default === null) {
            
            if(count($this->defaultSettings()) > 0 && array_key_exists($key, $this->defaultSettings())) {
                return $this->defaultSettings()[$key];
            } 
            
            if($inherit && $this->inheritSettingsFrom()) {
                $inheritor = $this->inheritSettingsFrom();

                if($inheritor) {
                    return $inheritor->getSetting($key);
                }
            }
        }

        return $default;
    }

    public function getSettingVerbose($key) : array
    {
        return [
            'inherited' => $this->getSetting($key, null, false) === null,
            'value' => is_numeric($this->getSetting($key)) ? (double)$this->getSetting($key) : $this->getSetting($key),
        ];
    }

    public function setSetting($key, $value) : Setting
    {
        $setting = $this->settings->where('key', $key)->first();

        if( ! $setting) {
            $setting = $this->settings()->create([
                'key' => $key,
                'value' => $value,
            ]);
        } else {
            $setting->update([
                'value' => $value,
            ]);
        }

        return $setting;
    }

    public function deleteSetting($key) : void
    {
        $setting = $this->settings->where('key', $key)->first();

        if($setting) {
            $setting->delete();
        }
    }

    protected function inheritSettingsFrom() : ?Adjustable
    {
        return null;
    }

    protected function defaultSettings() : array
    {
        return [];
    }
}