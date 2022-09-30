<?php

declare(strict_types=1);

namespace Authanram\LaravelQuill;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class LaravelQuillServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/authanram/laravel-quill'),
        ], 'quill-assets');
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-quill')
            ->hasConfigFile()
            ->hasViews('laravel-quill')
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishConfigFile();
            });
    }
}
