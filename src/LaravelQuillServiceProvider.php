<?php

declare(strict_types=1);

namespace Authanram\LaravelQuill;

use Authanram\LaravelQuill\Commands\LaravelQuillCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelQuillServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-quill')
            ->hasConfigFile()
            ->hasCommand(LaravelQuillCommand::class)
            ->hasViews();
    }
}
