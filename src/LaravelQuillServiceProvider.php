<?php

declare(strict_types=1);

namespace Authanram\LaravelQuill;

use Authanram\LaravelQuill\Commands\LaravelQuillCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelQuillServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/authanram/laravel-quill'),
        ], 'public');
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-quill')
            ->hasConfigFile('laravel-quill')
            ->hasCommand(LaravelQuillCommand::class)
            ->hasViews('laravel-quill');
    }
}
