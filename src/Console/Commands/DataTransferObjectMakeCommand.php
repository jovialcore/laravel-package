<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

final class DataTransferObjectMakeCommand extends GeneratorCommand
{
    protected $signature = "make:dto {name : The Dto Name }";
    protected $description = "Generate a new Data Transfer Object scaffold ";
    protected $type = "Data Transfer Object";


    protected function getStub(): string
    {
        $readOnly  = Str::contains(
            haystack: PHP_VERSION,
            needles: '8.2',
        );
        $file = $readOnly ? 'dto-82-.stub' : 'dto.stub';

        return __DIR__ . "/../../../stubs/{$file}";
    }
}
