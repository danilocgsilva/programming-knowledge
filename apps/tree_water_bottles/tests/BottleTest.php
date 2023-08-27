<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Danilocgsilvame\TreeWaterBottles\Bottle;

final class BottleTest extends TestCase
{
    /**
     * @dataProvider bottle1AndBottle2CurrentBottle1
     */
    public function testPourBottle1($fill, $empty, $remaining)
    {
        $bottle1 = new Bottle($fill, $fill);
        $bottle2 = new Bottle($empty, 0.0);

        $bottle1->pour($bottle2);

        $this->assertSame($remaining, $bottle1->getCurrentLevel());
    }

    /**
     * @dataProvider bottle1AndBottle2Bottle2Level
     */
    public function testPourBottle2($fill, $empty, $newLevel)
    {
        $bottle1 = new Bottle($fill, $fill);
        $bottle2 = new Bottle($empty, 0.0);

        $bottle1->pour($bottle2);

        $this->assertSame($newLevel, $bottle2->getCurrentLevel());
    }

    /**
     * @dataProvider bottle2PartiallyFilled
     */
    public function testPourPartialFilledBottle2($bottle1Full, $bottle2Capacity, $bottle2Partial, $bottle2End)
    {
        $bottle1 = new Bottle($bottle1Full, $bottle1Full);
        $bottle2 = new Bottle($bottle2Capacity, $bottle2Partial);

        $bottle1->pour($bottle2);

        $this->assertSame($bottle2End, $bottle2->getCurrentLevel());
    }

    public static function bottle2PartiallyFilled()
    {
        return [
            [8.0, 5.0, 3.0, 5.0],
            [8.0, 6.0, 3.0, 6.0],
            [5.0, 10.0, 3.0, 8.0],
            [4.0, 10.0, 3.0, 7.0],
            [9.0, 10.0, 3.0, 10.0],
        ];
    }

    public static function bottle1AndBottle2CurrentBottle1()
    {
        return [
            [8.0, 5.0, 3.0],
            [9.0, 6.0, 3.0],
            [7.0, 6.0, 1.0],
            [5,0, 5.0, 0.0],
            [4.0, 6.0, 0.0]
        ];
    }

    public static function bottle1AndBottle2Bottle2Level()
    {
        return [
            [8.0, 5.0, 5.0],
            [9.0, 6.0, 6.0],
            [7.0, 6.0, 6.0],
            [5.0, 5.0, 5.0],
            [4.0, 6.0, 4.0],
            [2.0, 6.0, 2.0]
        ];
    }
}
