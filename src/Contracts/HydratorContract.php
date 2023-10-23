<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Contracts;

interface HydratorContract
{

    /**
     * @param class-string<DataObjectContract> $class
     * @param array $properties
     * @return DataObjectContract
     */

    public function fill(string $class, array $properties): DataObjectContract;
}
