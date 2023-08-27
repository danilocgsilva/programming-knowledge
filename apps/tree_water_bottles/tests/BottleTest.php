<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Danilocgsilvame\TreeWaterBottles\Bottle;

final class BottleTest extends TestCase
{
    public function testPourBottle1()
    {
        $bottle1 = new Bottle(8, 0);
        $bottle2 = new Bottle(5, 0);

        $bottle1->pour($bottle2);

        $this->assertSame(3.0, $bottle1->getCurrentLevel());
    }

    public function testPourBottle2()
    {
        $bottle1 = new Bottle(8, 0);
        $bottle2 = new Bottle(5, 0);

        $bottle1->pour($bottle2);

        $this->assertSame(5.0, $bottle2->getCurrentLevel());
    }
}
