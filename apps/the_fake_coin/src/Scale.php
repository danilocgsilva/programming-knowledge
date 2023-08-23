<?php

declare(strict_types=1);

namespace Danilocgsilvame\TheFakeCoin;

class Scale
{
    public static function getScale(array $coins): float
    {
        return array_sum(
            array_map(fn ($coin) => $coin->getWeight(), $coins)
        );
    }
}
