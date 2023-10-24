<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Providers;

use Illuminate\Support\ServiceProvider;
use Jovialcore\LaravelDto\Contracts\HydratorContract;
use Jovialcore\LaravelDto\Hydrate;

final class  PackageServiceProvider extends ServiceProvider
{

    public array $bindings  = [
        HydratorContract::class => Hydrate::class
    ];

    
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {

            $this->commands(
                commands: [
                    DataTransferObjectMakeCommand::class,
                ]
            );
        }
    }
}
