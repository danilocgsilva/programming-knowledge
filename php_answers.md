# PHP answers

7. A possible class simplification can be:
```
<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi;

use Exception;

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
            throw new Exception("No discs left to remove.");
        }

        $topDisc = array_pop($this->discs);
        $this->topDisc = end($this->discs) ?: null;

        return $topDisc;
    }

    public function getTopDisc(): ?Disc
    {
        return $this->topDisc;
    }
}
```

Follows the main changes:

1. In the add() method, the condition to verify the upper disc size was simplified for the null operator coalescing to define $this->topDisc at the same time as the disc is added.

2. In the removeDisc() method, the changes in $this->topDisc after the disc removal was simplified using the ternary operator fo assing null when there's nos left on the stack.
