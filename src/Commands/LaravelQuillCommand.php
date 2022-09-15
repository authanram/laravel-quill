<?php

declare(strict_types=1);

namespace Authanram\LaravelQuill\Commands;

use Illuminate\Console\Command;

class LaravelQuillCommand extends Command
{
    public $signature = 'laravel-quill';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
