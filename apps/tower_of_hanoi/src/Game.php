<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi;

use Danilocgsilva\Hanoi\Stack;
use Danilocgsilva\Hanoi\Disc;
use Exception;

class Game
{
    private int $movementsDone;
    private bool $canStart;
    private array $stacks;
    private array $discs;

    public function __construct() {
        $this->movementsDone = 0;
        $this->canStart = false;
        $this->stacks = [];
    }

    public function setup(
        Stack $stack1,
        Stack $stack2,
        Stack $stack3,
        array $discs
    ): void
    {
        $this->stacks[] = $stack1;
        $this->stacks[] = $stack2;
        $this->stacks[] = $stack3;
        $this->discs = $discs;
        $this->canStart = true;
    }

    public function moveDisc(int $stackNumberStart, int $stackNumberEnd): Disc
    {
        if (!$this->canStart) {
            throw new Exception("Cannot start the game. Run setup first.");
        }
        $disc = $this->stacks[$stackNumberStart - 1]->removeDisc();
        $this->stacks[$stackNumberEnd - 1]->add($disc);
        $this->movementsDone++;
        return $disc;
    }

    public function isEnd(): bool
    {
        $emptyStack1 = $this->stacks[0]->getDiscsCount() === 0;
        $stack2HaveAllDiscs = $this->stacks[1]->getDiscsCount() === count($this->discs);
        $emptyStack3 = $this->stacks[2]->getDiscsCount() === 0;

        return $emptyStack1 && $stack2HaveAllDiscs && $emptyStack3;
    }

    public function getMovementsDone(): int
    {
        return $this->movementsDone;
    }
}