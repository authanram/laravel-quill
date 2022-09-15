<?php

declare(strict_types=1);

namespace Authanram\LaravelQuill\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Authanram\LaravelQuill\LaravelQuill
 */
class LaravelQuill extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Authanram\LaravelQuill\LaravelQuill::class;
    }
}
