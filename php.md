# PHP exercises

1. How many times does this code iterates?
```
<?php

$count = 0;
while ($count++ < 5) {
	print($count . "\n");
}
```

2. What is the difference between the behaviour of `Script A` and `Script B`?

Script A:
```php
$var = 0;
while (++$var < 10) {
    print("The \$var value is $var.\n");
}
```

Script B:
```php
$var = 0;
while ($var++ < 10) {
    print("The \$var value is $var.\n");
}
```

3. Does `Script A` behaves the same as the `Script B`?

Script A
```php
$var = 0;
while ($var++ < 10) {
    print("The \$var value is $var.\n");
}
```

Script B
```php
$var = 0;
while ($var < 10) {
    $var = $var + 1;
    print("The \$var value is $var.\n");
}
```

4. How many times does the code iterates?
```php
<?php

$count = 0;

do { 
	print($count . "\n"); 
} while ($count++ < 5); 
```

5. Which is the output of the following code:
```php
<?php

$count = 0;
while ($count++ < 5) {
	print($count . "\n");
}
```

6. Which is the output of following script:
```php
<?php

$count = 0;
while (++$count < 5) {
	print($count . "\n");
}
```

7. Can you simplify the following class?
```
<?php

declare(strict_types=1);

namespace Danilocgsilva\Hanoi;

use Exception;

class Stack
{
    private array $discs = [];
    private ?Disc $topDisc = null;

    public function add(Disc $disc)
    {
        if (count($this->discs) > 0) {
            if ($this->topDisc->getSize() < $disc->getSize()) {
                throw new Exception("You cannot pile a disc bigger than the one currently on top.");
            }
        }

        $this->discs[] = $disc;
        
        $this->topDisc = $disc;
    }

    public function removeDisc(): Disc
    {
        if (empty($this->discs)) {
            throw new Exception("No discs left to remove.");
        }

        $topDisc = array_pop($this->discs);

        if (empty($this->discs)) {
            $this->topDisc = null;
        } else {
            $this->topDisc = end($this->discs);
        }

        return $topDisc;
    }

    public function getTopDisc(): ?Disc
    {
        return $this->topDisc;
    }
}
```
