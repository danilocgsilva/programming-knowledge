# Perl exercises

1. This script has the duty to print all results of 2 powers all numbers from 1 to 16. But is is wrong! Fix it.

```perl
for ($i = 1; $i <= 16; $i++) {
    $result = 2 << $i;
    print("2 powers $i is " . $result . "\n");
}
```

2. The expressions:

A) `5.1 + 100005.2 - 100005.2`

and

B) `100005.2 - 100005.2 + 5.1`

represents exact same result. But if tested in Perl, expression A may incur in a round error, while expression B may be evaluated correctly. Why?

3. Given the script:

```
@my_array = ("John", "Robert", "Doe");
@quesion_array = @my_array-1;
```

The value `@question_array` will be:

A) An array: `("Robert", "Doe")`

B) An array: `(2)`

