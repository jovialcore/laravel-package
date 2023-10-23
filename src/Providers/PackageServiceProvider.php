<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Providers;

use Illuminate\Support\ServiceProvider;


final class  PackageServiceProvider extends ServiceProvider
{
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
