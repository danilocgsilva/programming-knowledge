<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi;

use Exception;
use Generator;

class Stack
{
    private array $discs = [];
    private ?Disc $topDisc = null;

    public function add(Disc $disc): void
    {
        if ($this->topDisc && $this->topDisc->getSize() < $disc->getSize()) {
            throw new Exception("You cannot pile a disc bigger than the one currently on top.");
        }

        $this->discs[] = $this->topDisc = $disc;
    }

    public function removeDisc(): Disc
    {
        if (empty($this->discs)) {
            throw new EmptyStackException("No discs left to remove.");
        }

        $topDisc = array_pop($this->discs);
        $this->topDisc = end($this->discs) ?: null;

        return $topDisc;
    }

    public function getTopDisc(): ?Disc
    {
        return $this->topDisc;
    }

    public function getDiscs(): Generator
    {
        while ($disc = $this->removeDisc()) {
            yield $disc;
        }
    }

    public function getDiscsCount(): int
    {
        return count($this->discs);
    }
}
