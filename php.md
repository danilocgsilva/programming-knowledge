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
