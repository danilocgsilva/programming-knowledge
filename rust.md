# Rust

Look at the following two scripts:

1.
```
fn main() {
    let s1 = "hello";
    let s2 = s1;
    println!("{} - {}, world!", s1, s2);
}
```

2.
```
fn main() {
    let s1 = String::from("hello");
    let s2 = s1;
    println!("{} - {}, world!", s1, s2);
}
```

One of them will compile without issues. But another script will throws an error at compilation. Which one will works and which will fail? And why?
