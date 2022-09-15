<?php

namespace Authanram\LaravelQuill\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LaravelQuillCommand extends Command
{
    public $signature = 'laravel-quill:install';

    public $description = 'Install package dependencies';

    public function handle(): int
    {
        $npmInstallCommand = 'npm add quill --save-dev';

        $this->task("Install npm dependencies <fg=green>[$npmInstallCommand]</>", function () use ($npmInstallCommand) {
            return shell_exec($npmInstallCommand) !== false;
        });

        $vendorPath = public_path('vendor/quill');

        $this->task("Publish assets <fg=green>[$vendorPath]</>", function () use ($vendorPath) {
            File::deleteDirectory($vendorPath);

            return File::copyDirectory(
                base_path('node_modules/quill/dist'),
                $vendorPath,
            );
        });

        $this->comment('All done');

        return self::SUCCESS;
    }
}
