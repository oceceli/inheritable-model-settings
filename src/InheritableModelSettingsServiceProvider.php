<?php

namespace Oceceli\InheritableModelSettings;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InheritableModelSettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inheritable-model-settings')
            // ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inheritable_model_settings_table');
    }
}
