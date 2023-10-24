<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Tests;

use Jovialcore\LaravelDto\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
