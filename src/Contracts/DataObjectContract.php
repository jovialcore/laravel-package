<?php

declare(strict_types=1);

namespace Jovialcore\LaravelDto\Contracts;

interface DataObjectContract
{

    /**
     * @return array<string,mixed>
     */

    public function toArray(): array;
}
