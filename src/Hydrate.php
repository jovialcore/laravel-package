<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto;

use EventSauce\ObjectHydrator\ObjectMapperUsingReflection;
use Jovialcore\LaravelDto\Contracts\HydratorContract;

class Hydrate implements HydratorContract
{
    public function __construct(
        private readonly ObjectMapperUsingReflection $mapper = new ObjectMapperUsingReflection(),
    ) {
    }

    public function fill(string $class, array $properties): DataObjectContract
    {
        return $this->mapper->hydrateObject(
            className: $class,
            payload: $properties
        );
    }
}
