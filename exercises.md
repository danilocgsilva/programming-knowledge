# Exercises

* [Very basic](#very-basic)
* [Problems solved by the basics](#problems-solved-by-the-basics)
* [Basic of classes](#basic-of-classes)
* [Under the hood - papper training](#under-the-hood---papper-training)
* [Advanced Problemas](#advanced-problems)
* [Design patterns](#design-patterns)
* [Regular expressions](#regular-expressions)

## Very basic

1. Write a loop that prints `hello` ten times.

## Problems solved by the basics

1. Write a program that prints every number from 0 to 1 that has a single digit after the decimal place (that is, 0.1, 0.2 and so on).

2. Writes a program that receives a numeric argument and checks its value. If the value is greater than the 17, them prints "`Currently, is in adulthood and can take on responsabilities`". Otherwise, prints "`Depends upon adult, not allowed to take serious chooses`". Or something like that.

3. Creates a *virtual dice*. Each time you use it, a random number between 1 and 6 are given.

4. Create *virtual dices* for D&D. This game also needs dices with different amount of sides, which are 4, 8, 10, 12 and 20 sides. Create a function for each case.

5. Create a *variable dice*. Suppose that you will always requires throw dices with diffenrent sides. Create a single function that allows you to have random numbers from 1 until 6, 4, 8, 10, 12, 20, 7, 66, 102, 1005, or whichever the user wants.

6. Creates a function that tells an *amount of oranges that you have*. For example: if a have no oranges, then prints "I have no organges.". If I have one orange, them prints "I have one orange". If have 2 or more oranges, them prints "I have several oranges".

## Basic of classes

1. Write a class called `Person`. The class must have it's height and weight as a property. Also, a property called name (helding the person name) to facilitates the person identification. Then, in the class itself also must have a method that calculates the BMI, call this method as `getMbi`. And finally, write another method called `condition`, that just prints a *person condition*, stating that the person is *thin*, *normal* or *overweight*, based on the data in https://www.diabetes.ca/managing-my-diabetes/tools---resources/body-mass-index-(bmi)-calculator. 

## Under the hood - papper training

1. Convert the following numbers to binary.

* 99
* 124
* 155
* 144
* 391
* 207
* 727
* 436
* 830
* 650
* 370
* 226
* 95

2. What is the result of the following expressions? Considers to store number in with 16 bits when necessary.

* a. `222 << 2`
* b. `56 & 33`
* c. `534 >> 1`
* d. `765 | 34`
* e. `224 ^ 401`
* f. `~198` (this one, you can provide the answer in binary)

## Advanced problems

1. We got the following contry - sequence pair, with 12 contries:

* Eritrea - 465
* Kazakhstan - 646
* Philippines - 385
* Saudi Arabia - 391
* Palau - 416
* Northern Cyprus - 130
* United Arab Emirates - 348
* Cuba - 101
* Cyprus - 561
* Zimbabwe - 518
* Tanzania - 513
* Brunei - 91

Rewrite the sequence number for all conutries, starting from 1, followed by its exact following number, obeying exact same sequence dicted by the original sequence number.

For example, you have:

* CountryA - 49
* CountryB - 79
* CountryC - 7
* CountryD - 43

Then rewrite:

* CountryA - 3
* CountryB - 4
* CountryC - 1
* CountryD - 2

So, sorting the sequence obeying the new sequence, you will get:

* CountryC - 1
* CountryD - 2
* CountryA - 3
* CountryB - 4

Observation: good if you write your own algorithm to reorder instead of using a high level function from some language. If you want to do so first, ok. But after create your own algorithm to reorder.

# Design Patterns

1. Check the following module:

Pattern.py
```py
from src.FormatString import FormatString
from src.FormatNumber import FormatNumber

class Pattern:

    @staticmethod
    def doing(type: str):
        
        if type == "number":
            return FormatNumber()
        elif type == "string":
            return FormatString()
        raise ValueError("Unknown format given")
```

FormatterInterface.py
```py
import abc

class FormatterInterface(abc.ABC):

    @staticmethod
    @abc.abstractmethod
    def format(input: str) -> str:
        pass    
```

FormatString.py
```py
from src.FormatterInterface import FormatterInterface

class FormatString(FormatterInterface):

    @staticmethod
    def format(input: str) -> str:
        return input
```

FormatNumber.py
```py
from src.FormatterInterface import FormatterInterface

class FormatNumber(FormatterInterface):

    @staticmethod
    def format(input: str) -> str:
        return str(round(float(input), 0))

```
Which is the name of the pattern, considering the patterns of GOF? In which category does the pattern falls?

## Regular Expressions

1. Given the regex:

`/de+f/`

What patterns matches successfully (more than one option may be correct)?

1. `def`
2. `deff`
3. `deeeef`
4. `deffff`
5. `de`

2. Which is the difference between `*`, `?` and `+`?
