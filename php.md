# PHP exercises

1. What is the difference between the behaviour of `Script A` and `Script B`?

Script A:
```php
$var = 0;
while (++$var < 10) {
    print("O valor de \$var é $var.\n");
}
```

Script B:
```php
$var = 0;
while ($var++ < 10) {
    print("O valor de \$var é $var.\n");
}
```

2. Does `Script A` behaves the same as the `Script B`?

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
