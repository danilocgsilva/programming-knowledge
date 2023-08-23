<?php

declare(strict_types=1);

use Danilocgsilvame\TheFakeCoin\Coin;
use Danilocgsilvame\TheFakeCoin\Scale;

require "vendor/autoload.php";

$coin1 = new Coin(5);
$coin2 = new Coin(4);
$coin3 = new Coin(5);
$coin4 = new Coin(5);
$coin5 = new Coin(5);

$coinsWeight = Scale::getScale([$coin1, $coin2, $coin3, $coin4, $coin5]);

print("The weight of measured coins is $coinsWeight\n");

