<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi\Tests;

use Danilocgsilva\Hanoi\Disc;
use Danilocgsilva\Hanoi\Game;
use Exception;
use PHPUnit\Framework\TestCase;
use Danilocgsilva\Hanoi\Stack;

class GameTest extends TestCase
{
    /**
     * @dataProvider providesThreeDiscs
     */
    public function testMove($disc1Big, $disc2Medium, $disc3tiny)
    {
        $firstStack = new Stack();
        $this->setupTower($firstStack, $disc1Big, $disc2Medium, $disc3tiny);
        $this->assertSame(3, $firstStack->getDiscsCount());
        $secondStack = new Stack();
        $game = new Game();
        $game->setup($firstStack, $secondStack, new Stack(), [$disc1Big, $disc2Medium, $disc3tiny]);
        $movedDiskCopy = $game->moveDisc(1, 2);
        $this->assertSame(2, $firstStack->getDiscsCount());
        $this->assertSame(1, $secondStack->getDiscsCount());
        $this->assertSame(1, $movedDiskCopy->getSize());
        $this->assertSame(1, $game->getMovementsDone());
        $this->assertFalse($game->isEnd());
    }

    /**
     * @dataProvider providesThreeDiscs
     */
    public function testFinishGameWithThreeDiscs($disc1Big, $disc2Medium, $disc3tiny)
    {
        $firstStack = new Stack();
        $this->setupTower($firstStack, $disc1Big, $disc2Medium, $disc3tiny);
        
        $game = new Game();
        $game->setup($firstStack, new Stack(), new Stack(), [$disc1Big, $disc2Medium, $disc3tiny]);

        $game->moveDisc(1, 2);
        $game->moveDisc(1, 3);
        $game->moveDisc(2, 3);
        $game->moveDisc(1, 2);
        $game->moveDisc(3, 1);
        $game->moveDisc(3, 2);
        $game->moveDisc(1, 2);

        $this->assertTrue($game->isEnd());
        $this->assertSame(7, $game->getMovementsDone());
    }

    public function testMustNotStartIfNotSetupDone()
    {
        $game = new Game();
        $this->expectException(Exception::class);
        $game->moveDisc(1, 2);
    }

    public static function providesThreeDiscs()
    {
        return [[new Disc(3), new Disc(2), new Disc(1)]];
    }

    private function setupTower($stack, $disc1, $disc2, $disc3)
    {
        $stack->add($disc1);
        $stack->add($disc2);
        $stack->add($disc3);
        
        return $stack;
    }
}
