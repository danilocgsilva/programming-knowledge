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
