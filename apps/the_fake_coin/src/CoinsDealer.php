<?php

declare(strict_types=1);

namespace Danilocgsilvame\TheFakeCoin;

class CoinsDealer
{
    public function providesFiveCoins(): array
    {
        $fakeIndex = rand(0, 4);
        $coins = [];

        for ($i = 0; $i <= 4; $i++) {
            if ($fakeIndex === $i) {
                $coins[] = new Coin(4);
            } else {
                $coins[] = new Coin(5);
            }
        }

        return $coins;
    }
}
