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

```perl
@my_array = ("John", "Robert", "Doe");
@quesion_array = @my_array-1;
```

The value `@question_array` will be:

A) An array: `("Robert", "Doe")`

B) An array: `(2)`

3. Describes the behavior of the `<>` operator.

4. Which is the output of the following script?
```perl
$count = 0;
print($count . "\n") while ($count++ < 5);
```

5. Can you find a problem in the following perl script?

**Worth to say**: The `next` statement means that the loop block should be interrupted in the current iteration and continues to the next iteration.

```perl
$count = 0;
while ($count <= 10) {
    if ($count == 5) {
        next;
    }
    $count++;
}
```

6. Given the following statements:
```
@list2 = ("John", "Mike", "Larissa", "Beatrice");
($scalar, @list1) = @list2;
```

A) What is the value of `$scalar`?

B) What is the value of `@list1`?

7. Given the following statements:
```
@list2 = ("John", "Mike", "Larissa", "Beatrice");
(@list1, $scalar) = @list2;
```

A) What is the value of `@list1`?

B) What is the value of `$scalar`?

8. What is the difference between `<=>` and `cmp`?

9. Tell what the following script does:
```perl
#!/usr/bin/perl

while ($line = <STDIN>) {
    $line =~ s/[^aeiou]//g;
    print("The vowels in line is: " . $line . "\n");
    @vowels = split(//, $line);
    foreach $vowel (@vowels) {
        $vowelcount{$vowel} += 1;
    }
}
$~ = "VOWELFORMAT";
write;

format VOWELFORMAT = 
===============================================================
Number of vowels found in text file:
    a: @<<   e: @<<
    $vowelcount{"a"}, $vowelcount{"e"}
    i: @<<   o: @<<
    $vowelcount{"i"}, $vowelcount{"o"}
    u: @<<
    $vowelcount{"u"}
===============================================================
.
```

10. Which usually the *modifiers* variable means about the kind of the variable?

a) `$my_variable`

b) `@my_variable`

c) `%my_variable`

10. What does the following subroutine do?

```
sub occurrences {
    $lettercount{$a} <=> $lettercount{$b};
}
```
