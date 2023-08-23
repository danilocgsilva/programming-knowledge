<?php

declare(strict_types=1);

namespace Danilocgsilvame\TheFakeCoin;

class Coin
{
    public function __construct(private float $weight) {
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
}
