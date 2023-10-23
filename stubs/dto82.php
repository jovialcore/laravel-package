<?php

declare(strict_types=1);

namespace {{ namespace }};

use Jovialcore\LaravelDto\Contracts\DtoContracts;

readonly class {{ class }} implements DtoContracts{
    public function __construct( 
        //
    ){

    }

    public function toArray(): array {
        return [];
    }
}