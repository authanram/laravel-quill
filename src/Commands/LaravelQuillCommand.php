<?php

namespace Authanram\LaravelQuill\Commands;

use Illuminate\Console\Command;

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

        $this->comment('All done');

        return self::SUCCESS;
    }
}
