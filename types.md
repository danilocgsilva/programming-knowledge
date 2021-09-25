# Types

## PHP

**Integers**

Ex:

* 643
* -149
* 0x1A
* 0123
* 0x1F

---

**Float or integers**

Ex:

* 2.21334234125E+23
* 5.54
* 4.E-10
* 018
* 

**Notice**: the example 2.21334234125E+23 could be an integer. But the php interpreter set it to a double.

---

**Boolean**

Ex:

* true
* false

Only those two are possible as boolean.

---

**Array**

Ex:

* [ 2, 4, 7, 8, 11.6 ]
* [ 223.1, 0.3, "Doug", "Funny" ]
* [ "alfa", "beta", "gamma" ]

---

**Object**

* (new SomeObject())

---

**Null**

Only one, the `null` itself.

---

**Resource**

An special object's type, which holds references to some external resource, as database connection or a file system file.

## Perl

Talking about types in Perl may not make sense. Give a look here: https://www.perlmonks.org/?node_id=157799. An think about the folllwing statement: *Perl's type system is based around data structures, not data types.*. So, maybe weird to try fit the type knowledge to Perl, but I will try to do so. But think as well that the *Perl's type system* mean to be a different paradigim of how we think of types in the language.

A single unit of data in Perl is also known as *scalar value*.

**Integer**

It is also known as *interger constant* or *integer literal*.

Ex:

* 1
* 1000
* 345
* -123
* 450_000000
* 2_000_000
* 5.41e+05
* 7.34e08

Note: notice the value of `2_000_000` and `450_000000`. Optionally, adding an underscore for sepparation, so facilitates lecturing from large numbers. Not as well that the unserscore is completely ignored, so doesn't metter the kind os separation to be performed in any number. Use it only for lectiruing facilitation.

**Float**

Ex:

* 11.4
* -275
* -0.3
* -.4
* .5
* 8.22e04

Notice that I've put a scientifc notation value both in the *Float* and *Integer*. Remember a statement above: *Perl's type system is based around data structures, not data types.*. So as continuing the reading from original text, then does not matter if 8.22e04 is considerada an integer or a float. The 8.22e04 *data structure* meets both the requirements for float operation as well the integers ones.

