<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi\Tests;

use Danilocgsilva\Hanoi\Disc;
use PHPUnit\Framework\TestCase;
use Danilocgsilva\Hanoi\Stack;
use Exception;
use Danilocgsilva\Hanoi\EmptyStackException;

class StackTest extends TestCase
{
    /**
     * @dataProvider basicStack
     */
    public function testTriesToRemoveDiscFromEmptyStack($emptyStack)
    {
        $this->expectException(Exception::class);
        $emptyStack->removeDisc();
    }

    /**
     * @dataProvider basicStack
     */
    public function testTriesToRemoveTwoDiscsFromAStackWithASingleDisc($stack)
    {
        $stack->add(new Disc(3));

        $stack->removeDisc();
        $this->expectException(EmptyStackException::class);
        $stack->removeDisc();
    }

    /**
     * @dataProvider basicStack
     */
    public function testStackFromTopIsTheSameAsLast($stack)
    {
        $firstDisc = new Disc(2);
        $lastDisc = new Disc(1);

        $stack->add($firstDisc);
        $stack->add($lastDisc);

        $removedDisc = $stack->removeDisc();

        $this->assertSame($removedDisc, $lastDisc);
    }

    /**
     * @dataProvider basicStack
     */
    public function testAddLargerDiscToStackMustThrowError($stack)
    {
        $firstDisc = new Disc(1);
        $secondDisc = new Disc(2);

        $stack->add($firstDisc);
        $this->expectException(Exception::class);
        $stack->add($secondDisc);
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testGetTopDiscAfterThreeAdditions($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);

        $this->assertSame($thirdDisc, $stack->getTopDisc());
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testGetTopDiscAcfterOneRemoval($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);

        $stack->removeDisc();

        $this->assertSame($secondDisc, $stack->getTopDisc());
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testGetTopDiscAcfterTwoRemoval($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);

        $stack->removeDisc();
        $stack->removeDisc();

        $this->assertSame($firstDisc, $stack->getTopDisc());
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testGetTopDiscAfterRemovingOne($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);
        $stack->removeDisc();
        $this->assertSame($secondDisc, $stack->getTopDisc());
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testGetTopDiscAfterRemovingAllThree($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);
        $stack->removeDisc();
        $stack->removeDisc();
        $stack->removeDisc();
        $this->assertSame(null, $stack->getTopDisc());
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public function testCheckDiscsAfterAdded($stack, $firstDisc, $secondDisc, $thirdDisc)
    {
        $stack->add($firstDisc);
        $stack->add($secondDisc);
        $stack->add($thirdDisc);
        
        $discsToCheckGenerator = $stack->getDiscs();
        $this->assertSame($thirdDisc, $discsToCheckGenerator->current());

        $discsToCheckGenerator->next();
        $this->assertSame($secondDisc, $discsToCheckGenerator->current());

        $discsToCheckGenerator->next();
        $this->assertSame($firstDisc, $discsToCheckGenerator->current());

        $this->assertSame(null, $stack->getTopDisc());
    }

    public static function basicStack()
    {
        return [[new Stack()]];
    }

    /**
     * @dataProvider theStackAndThreeDiscs
     */
    public static function theStackAndThreeDiscs()
    {
        return [[new Stack(), new Disc(3), new Disc(2), new Disc(1)]];
    }
}

