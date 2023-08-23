<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi;

class Disc
{
    public function __construct(private int $size) {
        $this->size = $size;
    }
    
    public function getSize(): int
    {
        return $this->size;
    }
}
