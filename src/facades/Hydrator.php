<?php

namespace Jovialcore\LaravelDto\Facades;

use Illuminate\Support\Facades\Facade;
use Jovialcore\LaravelDto\Hydrate;

/***
 *  
 * @method static DataObjectsContract fill(string $class, array $properties)
 * 
 * @see \Jovialcore\LaravelDto\Hydrate;
 * 
 */

final class Hydrator extends Facade

{
    /**
     * @return class-string
     */

    protected static function getFacadeAccessor(): string
    {
        return Hydrate::class;
    }
}
