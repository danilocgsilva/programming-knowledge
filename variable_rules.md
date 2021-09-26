# Variable rules

Variables is a way that all programing languages allow to store values, or a simple data that may be recovered in another part of program are returned to some *final usage*.

Usually, you have a big freedom in the most languages to write anything as a variable to be recovered in another part of program. Worth mention that only the "space" is something not allowabe or strongly not recomended to put as variable name.

Nevertheless, different programming langues may varies a little in what is allowed to put as variables. Examples:

* in **PHP**, *all* varibles with all kinds must be written preceded by "`$`" sign:

```
$name = "Clark Elyson";
$ages = ["Twenty", 30, 2, "Eleven"];
```

The, to access those variables, use exactly same form as you defined them:

```
print("The user name is " . $name);
foreach ($ages as $age) {
```

* in **javascript** there few ways to declare variables with *subtle differences*. But the following are all valid forms to do so:

```
name = "Robert Mazera";
let name2 = "Ellen Petch";
var name3 = "Helena Maldonado";
```

To access them just type them as they are:

```
console.log("The first name is " + name);
console.log("The second name is " + name2);
console.log("The third name is " + name3);
```

