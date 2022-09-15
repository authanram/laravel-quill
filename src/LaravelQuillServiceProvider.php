<?php

namespace Authanram\LaravelQuill;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Authanram\LaravelQuill\Commands\LaravelQuillCommand;

class LaravelQuillServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-quill')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-quill_table')
            ->hasCommand(LaravelQuillCommand::class);
    }
}
