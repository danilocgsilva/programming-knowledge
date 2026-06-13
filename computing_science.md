[Block 1](#block-1-from-chatgpt)
[Block 2](#block-2-from-claude-ai)
[Block 3](#block-3-mistral)
[Block 4](#block-4-deepseek)
[Block 5](#block-5-perplexity)
[Block 6](#block-6-grok)
[Block 7](#block-7---gemini)

# Block 1: from ChatGPT

## Question:

Give me some logic and maths exercises, suitable for a computing science student.

## Answer:

Here is a mixed set of logic, discrete mathematics, algorithms, and problem-solving exercises that are useful for a Computer Science student. I've ordered them roughly from easier to harder.

# Logic

### 1. Truth Table

Construct the truth table for:

[
(P \land Q) \rightarrow (\neg P \lor R)
]

Determine whether the formula is:

* a tautology,
* a contradiction,
* or contingent.

---

### 2. Logical Equivalence

Prove using logical laws (not truth tables) that:

[
\neg(P \rightarrow Q) \equiv P \land \neg Q
]

---

### 3. Knights and Knaves

On an island:

* Knights always tell the truth.
* Knaves always lie.

Alice says:

> "Bob is a knave."

Bob says:

> "We are of different types."

Determine whether Alice and Bob are knights or knaves.

---

### 4. Predicate Logic

Translate into predicate logic:

> Every programmer who knows Rust knows at least one systems programming language.

Use:

* Programmer(x)
* Knows(x,y)
* SystemsLanguage(y)

---

# Sets and Discrete Mathematics

### 5. Set Operations

Given:

[
A = {1,2,3,4,5}
]

[
B = {3,4,5,6,7}
]

Find:

* (A \cup B)
* (A \cap B)
* (A - B)
* (B - A)

---

### 6. Power Set

How many elements are in the power set of a set containing:

* 8 elements?
* 16 elements?
* n elements?

Explain why.

---

### 7. Relations

Given the relation:

[
R = {(1,1),(2,2),(3,3),(1,2),(2,1)}
]

Determine whether it is:

* Reflexive
* Symmetric
* Antisymmetric
* Transitive

---

# Number Theory

### 8. Euclidean Algorithm

Compute:

[
\gcd(252,105)
]

using the Euclidean Algorithm.

---

### 9. Modular Arithmetic

Compute:

[
17^{100} \mod 7
]

without calculating (17^{100}) directly.

---

### 10. Prime Numbers

Prove that if (p) is prime and (p\mid ab), then:

[
p\mid a \quad \text{or} \quad p\mid b
]

---

# Combinatorics

### 11. Password Counting

A password:

* has 8 characters,
* uses uppercase letters (26),
* uses digits (10),

How many possible passwords exist if:

* any character can be used in any position?

---

### 12. Committee Selection

From 10 students:

* choose a committee of 4.

How many committees are possible?

---

### 13. Seating Problem

How many ways can 6 people sit around a circular table?

---

# Graph Theory

### 14. Graph Degrees

A graph has vertices with degrees:

[
3,3,4,5,1,2
]

How many edges does it contain?

(Hint: Handshaking Lemma.)

---

### 15. Shortest Path

Given the weighted graph:

```
A --2-- B
|       |
4       1
|       |
C --3-- D
```

Find the shortest path from A to D.

---

### 16. Trees

A tree contains 25 vertices.

How many edges does it contain?

Prove your answer.

---

# Algorithms

### 17. Time Complexity

Determine the Big-O complexity:

```python
for i in range(n):
    for j in range(n):
        print(i, j)
```

---

### 18. Nested Loops

Determine the Big-O complexity:

```python
i = 1
while i < n:
    i *= 2
```

---

### 19. Binary Search

How many comparisons are needed in the worst case for binary search on:

* 1,024 elements
* 1,000,000 elements

---

# Mathematical Reasoning

### 20. Induction

Prove by induction:

[
1+2+3+\cdots+n = \frac{n(n+1)}{2}
]

---

### 21. Recursive Sequence

Given:

[
a_n = 2a_{n-1}+1
]

with

[
a_0=0
]

Find:

* (a_1)
* (a_2)
* (a_3)
* a closed formula for (a_n)

---

# Programming-Oriented Challenges

### 22. Invariant Challenge

You have two jugs:

* 5 liters
* 3 liters

Neither has markings.

Can you obtain exactly 4 liters?

Describe the sequence of operations.

---

### 23. Boolean Circuit

Simplify:

[
(A \land B)\lor(A \land \neg B)
]

using Boolean algebra.

---

### 24. Recurrence Relation

Solve:

[
T(n)=T(n/2)+1
]

with:

[
T(1)=0
]

Find the asymptotic complexity.

---

### 25. Proof Challenge

Show that the sum of two odd integers is always even.

Provide:

1. an example,
2. a general proof.

---

If you'd like something closer to a university Discrete Mathematics exam, I can also create a **20-question problem set with solutions hidden at the end**, covering propositional logic, proofs, induction, graph theory, and algorithm analysis.

# Block 2: from Claude AI

## Question

Give me some logic and maths exercises, suitable for a computing science student.

## Answer

Here are 20 exercises spread across five topic areas that are especially relevant to computing science:

**Boolean logic** covers truth tables, simplification, De Morgan's laws, and logic gate design — all foundational to digital circuits and programming.

**Number systems** digs into binary, two's complement, floating-point quirks, and bitwise tricks that show up constantly in systems programming.

**Sets & counting** builds the combinatorics intuition needed for algorithm analysis, database theory, and cryptography.

**Proofs & induction** develops rigorous reasoning skills, including loop invariants — a technique directly used to verify that algorithms are correct.

**Algorithms & complexity** introduces Big-O, recurrence relations, and the P vs NP question that underpins modern cryptography.

Each exercise has a hint you can reveal if you're stuck, and an "Ask Claude" button if you'd like a full worked solution or explanation. A good starting order would be: sets → boolean logic → number systems → proofs → complexity.

## Boolean logic

easy

1. Truth table construction
Complete the truth table for the expression: (A ∧ ¬B) ∨ (¬A ∧ B)

Fill in all 4 rows for A, B, and the result. What well-known logical operation does this simplify to?

medium

2. Boolean algebra simplification
Simplify this expression using Boolean algebra laws:
(A ∨ B) ∧ (A ∨ ¬B) ∧ (¬A ∨ B)

Show each step and which law you applied (distributive, absorption, De Morgan's, etc.).

easy

3. De Morgan's laws in code
Rewrite this condition using De Morgan's laws so it uses no not:
not (x > 0 and y > 0)

Then verify with values x=1, y=-1 and x=-1, y=-1.

hard

4. Logic gate circuit
Given inputs A, B, C, write a Boolean expression and truth table (8 rows) for a circuit that outputs 1 only when an odd number of its inputs are 1. How many logic gates does your minimal implementation need?

## Number system

easy

1. Base conversions
Convert without a calculator:
• 10110101 (binary) → decimal
• 255 (decimal) → binary and hexadecimal
• 0xAF (hex) → binary

medium

2. Two's complement
Using 8-bit two's complement representation:
1. What is the range of representable integers?
2. Represent −37 in binary.
3. Add 0b01101100 + 0b11010101 and check for overflow.

medium

3. Floating point gotcha
In most languages, 0.1 + 0.2 == 0.3 evaluates to false. Explain why this happens using your knowledge of binary floating-point representation. How should you compare floating-point numbers in practice?

medium

4. Bitwise operations
Without using division or modulo operators, write expressions using only bitwise ops (&, |, ^, ~, <<, >>) to:
1. Test if an integer n is even
2. Multiply n by 8
3. Extract the 4 least-significant bits of n

## Sets & counting

easy

1. Set operations
Let A = {1, 2, 3, 4, 5}, B = {3, 4, 5, 6, 7}, U = {1..10}.

Find: A ∪ B, A ∩ B, A \ B, A △ B (symmetric difference), and |P(A ∩ B)| (size of the power set of A∩B).

medium

2. Counting passwords
A password must be 8–10 characters long, using only lowercase letters (26) and digits (10).

1. How many passwords are there in total?
2. How many contain at least one digit?
3. If you check 10⁹ passwords/second, how long (in years) to brute-force all 8-character passwords?

easy

3. Pigeonhole principle
1. In a group of 367 people, at least how many must share a birthday? Why?
2. A sock drawer has red, blue, and green socks. What is the minimum number you must draw (without looking) to guarantee a matching pair?
3. Prove that in any sequence of n²+1 distinct integers, there is always a monotone subsequence of length n+1.

hard

4. Inclusion-exclusion
In a class of 100 students: 60 passed maths, 50 passed CS, 40 passed physics. 30 passed maths & CS, 25 passed maths & physics, 20 passed CS & physics, and 15 passed all three.

## Proofs & induction

easy

1. Direct proof
Prove directly that the sum of two even integers is always even. Then prove that the product of two odd integers is always odd.

medium

2. Proof by induction
Prove by mathematical induction that for all n ≥ 1:

1 + 2 + 3 + ... + n = n(n+1)/2

Then use the same technique to prove that 2⁰ + 2¹ + ... + 2ⁿ = 2ⁿ⁺¹ − 1.

medium

3. Contradiction
Prove by contradiction that √2 is irrational. Then argue (informally) why the same approach proves √3 is irrational, but would fail for √4.

hard

4. Loop invariant
Consider this algorithm:
r = 0; i = 0
while i < n:
    r = r + a[i]
    i = i + 1
State a loop invariant, prove it holds before the loop, after each iteration, and that it implies correctness on termination.

## Algorithms & complexity

easy

1. Big-O analysis
Give the Big-O time complexity of each, and briefly explain:
1. A nested loop: outer runs n times, inner runs n times
2. Binary search on a sorted array of n elements
3. Checking if a number n is prime by trial division up to √n

medium

2. Recurrence relation
Merge sort splits an array of n elements in half, recurses on each half, then merges in O(n). This gives the recurrence T(n) = 2T(n/2) + O(n).

Use the Master Theorem to solve this. What is the overall complexity? Does this change if the merge step is O(n²)?

hard

3. Algorithm design
Given an unsorted array of n integers, find the two numbers that sum to a target value T.

1. Give an O(n²) solution (brute force).
2. Give an O(n log n) solution using sorting.
3. Give an O(n) solution using a hash set.
Describe each and analyse its space complexity too.

hard

4. P vs NP intuition
The Boolean satisfiability problem (SAT) asks: given a Boolean formula, is there an assignment of variables that makes it true?

1. Why is checking a proposed solution easy (polynomial time)?
2. Why is finding a solution believed to be hard?
3. What would it mean practically if P = NP?

# Block 3: Mistral

## Question:

Give me some logic and maths exercises, suitable for a computing science student.

## Answer

Here are some logic and math exercises tailored for a computing science student, covering a range of topics from discrete mathematics to algorithmic thinking:

---

## **Logic Exercises**

### 1. Propositional Logic
**Problem:**
Given the following logical statements:
- P: "It is raining."
- Q: "I will take an umbrella."

Translate the following into symbolic logic:
- "If it is raining, then I will take an umbrella."
- "It is not raining, but I will take an umbrella anyway."

**Follow-up:**
Construct a truth table for the compound statement: (P ∧ Q) ∨ (¬P ∧ Q)

---

### 2. Predicate Logic
**Problem:**
Let the domain be all integers. Define:
- P(x): "x is even."
- Q(x, y): "x is greater than y."

Translate the following into predicate logic:
- "For every integer x, if x is even, then there exists an integer y such that x is greater than y."
- "There exists an integer x such that x is even and for all integers y, x is not greater than y."

---

### 3. Logical Puzzles
**Problem:**
You encounter two doors. One leads to freedom, the other to certain doom. There are two guards: one always lies, the other always tells the truth. You can ask **one** question to **one** guard to determine the safe door. What do you ask?

---

## **Discrete Mathematics Exercises**

### 4. Set Theory
**Problem:**
Let A = {1, 2, 3, 4}, B = {2, 4, 6, 8}, and C = {3, 4, 5, 6}.
Compute:
- A ∪ (B ∩ C)
- (A ∪ B) ∩ (A ∪ C)
- A × B (Cartesian product)

---

### 5. Combinatorics
**Problem:**
- How many ways can you arrange the letters in the word "COMPUTER"?
- How many 4-digit numbers can be formed using the digits 1, 2, 3, 4, 5, 6 if repetition is **not** allowed?

---

### 6. Graph Theory
**Problem:**
Consider a graph with vertices {A, B, C, D, E} and edges {AB, AC, AD, BE, BC, CE, DE}.
- Draw the graph.
- Is the graph connected? Justify your answer.
- Find the shortest path from A to E.

---

## **Algorithmic Thinking**

### 7. Recursion
**Problem:**
Write a recursive function to compute the nth Fibonacci number.
**Follow-up:**
What is the time complexity of your solution? Can you optimize it?

---

### 8. Proof by Induction
**Problem:**
Prove by induction that for all n ≥ 1,
1 + 2 + 3 + ... + n = n(n+1)/2.

---

### 9. Binary and Hexadecimal
**Problem:**
- Convert the decimal number 255 to binary and hexadecimal.
- Convert the binary number 11011011 to decimal and hexadecimal.

---

### 10. Boolean Algebra
**Problem:**
Simplify the following Boolean expression using algebraic manipulation:
F = (A ∧ B) ∨ (A ∧ ¬B) ∨ (¬A ∧ B)

---

Would you like solutions or hints for any of these, or do you want to try solving them first? Also, is there a specific topic (e.g., graph theory, recursion, logic puzzles) you'd like to focus on?

# Block 4: Deepseek

## Question:

Give me some logic and maths exercises, suitable for a computing science student.

## Answer

Here’s a set of **logic and maths exercises** tailored for a computer science student — covering propositional logic, proof techniques, set theory, combinatorics, number theory, and graph theory.

---

## **1. Propositional Logic & Truth Tables**

**Exercise 1.1**  
Simplify the Boolean expression:  
\[
(P \land Q) \lor (P \land \lnot Q) \lor (\lnot P \land Q)
\]  
using only logical equivalences (not truth tables). Name each law you use.

**Exercise 1.2**  
Determine whether the following argument is valid:  
Premises:  
1. If the system is secure, then the firewall is active.  
2. Either the intrusion detection system is offline, or the system is not secure.  
3. The intrusion detection system is not offline.  
Conclusion: The firewall is active.  

Translate to propositional logic, then prove or disprove validity.

**Exercise 1.3**  
Prove that the XOR operation (⊕) is associative:  
\[
(P \oplus Q) \oplus R \equiv P \oplus (Q \oplus R)
\]  
using truth tables or algebraic manipulation.

---

## **2. Proof Techniques**

**Exercise 2.1 (Proof by contradiction)**  
Prove that \(\sqrt{3}\) is irrational.

**Exercise 2.2 (Induction)**  
Prove that for all \(n \geq 1\):  
\[
\sum_{k=1}^{n} (3k-2) = \frac{n(3n-1)}{2}.
\]

**Exercise 2.3 (Loop invariant)**  
Consider the algorithm below for computing \(x^y\) for integers \(x \geq 1\), \(y \geq 0\):  

```
result = 1
while y > 0:
    if y is odd:
        result = result * x
    x = x * x
    y = y // 2
```

Find a loop invariant and prove that the algorithm correctly returns \(x^{\text{initial }y}\).

---

## **3. Set Theory & Functions**

**Exercise 3.1**  
Let \(A, B, C\) be sets. Prove or disprove:  
\[
(A \setminus B) \cup (B \setminus C) = (A \cup B) \setminus (B \cap C).
\]

**Exercise 3.2**  
Define \(f: \mathbb{N} \to \mathbb{Z}\) by  
\[
f(n) = \begin{cases} 
\frac{n}{2} & \text{if } n \text{ is even} \\
-\frac{n+1}{2} & \text{if } n \text{ is odd}
\end{cases}
\]  
Show that \(f\) is bijective. What does this tell you about the cardinalities of \(\mathbb{N}\) and \(\mathbb{Z}\)?

**Exercise 3.3**  
Prove that the power set of \(\mathbb{N}\) is uncountable. (Use Cantor’s diagonal argument.)

---

## **4. Combinatorics & Probability**

**Exercise 4.1**  
How many binary strings of length 10 have exactly 4 ones and no two consecutive zeros?

**Exercise 4.2**  
A bitstring of length \(n\) is chosen uniformly at random. Let \(E\) be the event that the string starts and ends with 1, and \(F\) the event that it contains exactly two 1’s in total. Are \(E\) and \(F\) independent? Justify.

**Exercise 4.3**  
Prove the identity combinatorially (by counting the same set in two ways):  
\[
\binom{n}{k} \binom{k}{r} = \binom{n}{r} \binom{n-r}{k-r}.
\]

---

## **5. Modular Arithmetic & Number Theory**

**Exercise 5.1**  
Find all integers \(x\) such that:  
\[
x \equiv 2 \ (\text{mod } 5), \quad x \equiv 3 \ (\text{mod } 7), \quad x \equiv 4 \ (\text{mod } 9).
\]

**Exercise 5.2**  
Prove that if \(p\) is an odd prime, then  
\[
1^2 + 2^2 + \dots + (p-1)^2 \equiv 0 \ (\text{mod } p).
\]

**Exercise 5.3**  
Let \(a, b \in \mathbb{Z}\). Prove: \(\gcd(a,b) = \gcd(a+b, \mathrm{lcm}(a,b))\).

---

## **6. Graph Theory & Relations**

**Exercise 6.1**  
Prove that in any simple undirected graph with at least two vertices, there are at least two vertices with the same degree.

**Exercise 6.2**  
Let \(R\) be a relation on \(\mathbb{Z}\) defined by \(aRb\) if \(a^2 \equiv b^2 \ (\text{mod } 5)\).  
- Show that \(R\) is an equivalence relation.  
- Describe the equivalence classes.

**Exercise 6.3**  
A tournament is a directed graph where for every pair of distinct vertices \(u, v\), exactly one directed edge \(u \to v\) or \(v \to u\) exists. Prove that every tournament has a Hamiltonian path (a directed path visiting each vertex exactly once).

---

## **7. Bonus: Recursive Definitions & Invariants**

**Exercise 7.1**  
Define a sequence by \(a_1 = 1\), \(a_{n} = a_{\lfloor n/2 \rfloor} + a_{\lfloor n/3 \rfloor}\) for \(n > 1\). Prove by strong induction that \(a_n \leq 6n\) for all \(n \geq 1\).

**Exercise 7.2**  
You have a chocolate bar of size \(m \times n\) squares. In one move, you break a piece along a grid line into two smaller pieces. Prove that it takes exactly \(mn - 1\) breaks to separate the bar into individual squares. (Use an invariant.)

---

Let me know if you’d like **detailed solutions** or hints for any of these.

# Block 5: Perplexity

## Question:

Give me some logic and maths exercises, suitable for a computing science student.

## Answer

Aquí tienes una selección de ejercicios de lógica y matemáticas diseñados específicamente para un estudiante de ciencias de la computación, cubriendo temas fundamentales como lógica proposicional, álgebra booleana, teoría de conjuntos, combinatoria, y sistemas binarios. [libroscbi.izt.uam](https://libroscbi.izt.uam.mx/index.php/lcbi/catalog/book/119)

### 🔹 Lógica Proposicional y Álgebra Booleana

1. **Simplificación de expresión booleana**  
   Simplifica la siguiente expresión usando las leyes de álgebra booleana:  
   \[
   (A \land B) \lor (A \land \neg B) \lor (\neg A \land B)
   \]  
   *Objetivo:* Practicar simplificación para optimizar condiciones en código. [stem.org](https://www.stem.org.uk/resources/community/collection/421126/mathematics-computer-science)

2. **Tabla de verdad y circuito lógico**  
   Construye la tabla de verdad para:  
   \[
   P = (A \lor B) \land \neg(A \land B)
   \]  
   Luego, identifica qué operación lógica representa (es la XOR). Diseña el circuito con puertas lógica. [stem.org](https://www.stem.org.uk/resources/community/collection/421126/mathematics-computer-science)

3. **Mapa de Karnaugh**  
   Usa un mapa de Karnaugh para simplificar:  
   \[
   f(A,B,C) = \sum m(0, 1, 3, 5, 6)
   \]  
   *Aplicación:* Diseño de circuitos digitales eficientes. [stem.org](https://www.stem.org.uk/resources/community/collection/421126/mathematics-computer-science)

***

### 🔹 Teoría de Conjuntos y Lógica Matemática

4. **Operaciones con conjuntos**  
   Dados:  
   \( A = \{1, 2, 3, 4\} \), \( B = \{3, 4, 5, 6\} \), \( C = \{4, 5, 7\} \)  
   Calcula:  
   - \( A \cap B \)  
   - \( (A \cup B) - C \)  
   - \( A \times B \) (producto cartesiano)  
   *Aplicación:* Bases de datos y operaciones con tablas. [libroscbi.izt.uam](https://libroscbi.izt.uam.mx/index.php/lcbi/catalog/book/119)

5. **Demostración por inducción**  
   Prueba por inducción matemática que:  
   \[
   \sum_{i=1}^{n} i = \frac{n(n+1)}{2}
   \]  
   *Aplicación:* Análisis de complejidad de algoritmos. [libroscbi.izt.uam](https://libroscbi.izt.uam.mx/index.php/lcbi/catalog/book/119)

***

### 🔹 Sistemas Binarios y Matemáticas Discretas

6. **Conversión binario-decimal**  
   Convierte a decimal:  
   - \( 101101_2 \)  
   - \( 0.625_{10} \) a binario  
   *Aplicación:* Representación de datos en memoria. [teachinglondoncomputing](https://teachinglondoncomputing.org/puzzles/)

7. **Número normalizado en binario**  
   Normaliza en binario flotante el número:  
   \( 0.00101_2 \)  
   *Objetivo:* Entender representación IEEE 754. [stem.org](https://www.stem.org.uk/resources/community/collection/421126/mathematics-computer-science)

8. **Combinatoria básica**  
   ¿De cuántas maneras se pueden ordenar 5 libros si 2 deben estar juntos?  
   *Aplicación:* Algoritmos de ordenamiento y permutaciones. [scribd](https://www.scribd.com/document/695268593/Math-for-Computing)

***

### 🔹 Puzzles Lógicos (Computacional)

9. **Bakuro (puzzle binario)**  
   Resuelve un Bakuro 4×4: coloca números 1, 2, 4, 8 en cada fila/columna sin repetir, tal que la suma de números con celdas marcadas iguala el número dado.  
   *Objetivo:* Entender potencias de 2 y lógica binaria. [teachinglondoncomputing](https://teachinglondoncomputing.org/puzzles/)

10. **Sudoku 4×4**  
   Completa un Sudoku 4×4 usando números 1–4, sin repetir en fila, columna o subcuadrícula 2×2.  
   *Aplicación:* Algoritmos de búsqueda y restricción. [teachinglondoncomputing](https://teachinglondoncomputing.org/puzzles/)

***

### 🔹 Teoría de Grafos (adicional)

11. **Camino más corto**  
   Dado un grafo con nodos A, B, C, D y aristas:  
   - A→B (peso 3), A→C (peso 1), B→D (peso 2), C→D (peso 4)  
   Usa el algoritmo de Dijkstra para hallar el camino más corto de A a D.  
   *Aplicación:* Redes y optimización. [teachinglondoncomputing](https://teachinglondoncomputing.org/puzzles/)

***

¿Quieres que te envíe las **soluciones** de estos ejercicios, o prefieres más ejercicios en algún tema específico (como criptografía, IA, o análisis de algoritmos)?

# Block 6: Grok

## Question:

Give me some logic and maths exercises, suitable for a computing science student.

## Answer:

**Logic and Maths Exercises for Computer Science Students**

Here’s a curated set of exercises across key areas: **propositional/predicate logic**, **set theory & relations**, **combinatorics & counting**, **graph theory**, **induction & recurrence**, and **basic linear algebra / number theory**. They range from foundational to intermediate, with direct relevance to algorithms, data structures, databases, complexity, and cryptography.

### 1. Propositional and Predicate Logic

**Exercise 1.1**  
Prove the following logical equivalence using truth tables or algebraic manipulation:  
\[(p \rightarrow q) \land (q \rightarrow r) \equiv (p \rightarrow r) \land ((p \lor q) \rightarrow r)\]  
Then, interpret it in the context of program preconditions/postconditions.

**Exercise 1.2**  
Translate the following English statement into predicate logic and determine if it is valid (prove or give a counter-model):  
"For every program P and every input x, if P terminates on x, then there exists a proof of termination."  
Use predicates: Terminates(P, x), HasProof(P, x).

**Exercise 1.3**  
Use resolution to prove:  
Premises:  
- \(\forall x (P(x) \lor Q(x))\)  
- \(\forall x (\neg Q(x) \rightarrow R(x))\)  
- \(\exists x \neg P(x)\)  
Conclusion: \(\exists x R(x)\)

### 2. Sets, Relations, and Functions

**Exercise 2.1**  
Let \(A = \{1, 2, 3, 4\}\) and \(R = \{(a,b) \mid a \text{ divides } b\}\) on A.  
(a) Draw the Hasse diagram of the poset (A, R).  
(b) Is it a lattice? Justify.  
(c) Find the number of equivalence relations on a set with 4 elements (Bell number B₄).

**Exercise 2.2**  
Define a function \(f: \mathbb{N} \rightarrow \mathbb{N}\) by \(f(n) = n + \lfloor \sqrt{n} \rfloor\).  
Prove that \(f\) is injective but not surjective. Then, relate this to hashing collisions in data structures.

### 3. Combinatorics and Counting

**Exercise 3.1**  
How many ways are there to assign 6 distinct tasks to 3 identical processors such that no processor is idle? (Use Stirling numbers of the second kind.)

**Exercise 3.2**  
In a binary search tree with n distinct keys inserted in random order, what is the expected height? Derive a recurrence or give the asymptotic bound with justification.

**Exercise 3.3**  
A password must be 8–12 characters long, containing at least one uppercase, one lowercase, one digit, and one special character from {!, @, #, $}.  
Calculate the total number of valid passwords (use inclusion-exclusion).

### 4. Graph Theory

**Exercise 4.1**  
Prove that a connected graph with n vertices and n–1 edges is a tree. Then, show that adding any edge creates exactly one cycle.

**Exercise 4.2**  
Consider the complete bipartite graph K_{3,3}.  
(a) Is it planar? Prove using Kuratowski’s theorem or Euler’s formula.  
(b) Model a scheduling problem where one side is tasks and the other is resources.

**Exercise 4.3**  
Find the number of spanning trees in K_5 using Kirchhoff’s matrix tree theorem (construct the Laplacian matrix and compute a cofactor).

### 5. Mathematical Induction and Recurrences

**Exercise 5.1**  
Prove by strong induction that every integer n ≥ 2 can be written as a product of primes (Fundamental Theorem of Arithmetic – existence part).

**Exercise 5.2**  
Solve the recurrence for the time complexity of merge sort:  
\[T(n) = 2T(n/2) + n, \quad T(1) = 1\]  
Use the master theorem or iteration method. Then, compare with quicksort’s average case.

### 6. Linear Algebra & Number Theory (CS Applications)

**Exercise 6.1**  
Given the matrix  
\[A = \begin{pmatrix} 2 & 1 \\ 1 & 2 \end{pmatrix}\]  
(a) Find its eigenvalues and eigenvectors.  
(b) Use diagonalization to compute A¹⁰ efficiently.  
(Relates to PageRank, linear recurrence solving, etc.)

**Exercise 6.2**  
Using the Euclidean algorithm, find gcd(123456, 7890) and express it as a linear combination (Bézout’s identity).  
Then, solve the modular equation: 123456x ≡ 1 (mod 7890) if possible.

**Exercise 6.3**  
In RSA, let p=17, q=23. Compute n, φ(n), choose e=5, and find the corresponding private key d. Encrypt the message “CS” (map C=3, S=19) and decrypt it.

---

These exercises build skills directly used in algorithm design, formal verification, cryptography, databases (relations), and complexity analysis.

Would you like:
- Solutions/hints for any of these?
- More exercises on a specific topic (e.g., automata, probability for randomized algorithms, generating functions)?
- Programming implementations (e.g., in Python) to verify some of these?
- Harder variants (e.g., for contest prep or interviews)?

Let me know how to tailor them further!

# Block 7 - Gemini

## Question

Give me some logic and maths exercises, suitable for a computing science student.

## Answer

Here is a set of logic and mathematics exercises tailored for a computer science context. They cover core foundational areas: **discrete mathematics, boolean algebra, algorithm analysis, and formal logic**.

---

## 1. Mathematical Induction & Algorithm Analysis

**The Problem:**
You are analyzing a recursive function that processes a binary tree. To determine its time complexity, you need to prove a fundamental property of strictly binary trees (where every node has either $0$ or $2$ children).

Prove by **mathematical induction** that for any non-empty strictly binary tree, the number of leaf nodes ($L$) is always exactly one more than the number of internal nodes ($I$).

$$\text{Formula to prove: } L = I + 1$$

* **Hint:** For the inductive step, consider what happens to the count of leaves and internal nodes when you remove two sibling leaves from a tree, collapsing them into a single leaf.

---

## 2. Boolean Algebra & Circuit Minimization

**The Problem:**
A backend service evaluates a complex permission flag system. The current logic gate implementation is highly redundant and consumes unnecessary CPU cycles.

Simplify the following Boolean expression to its **minimal Sum-of-Products (SOP)** form using the laws of Boolean algebra:

$$F(A, B, C) = (A \cdot \overline{B} \cdot C) + (A \cdot B \cdot C) + (\overline{A} \cdot B \cdot \overline{C}) + (\overline{A} \cdot B \cdot C)$$

* **Task 1:** Show the step-by-step simplification (state which laws you are using, e.g., Distributive, Complementarity, Identity).
* **Task 2:** Write the final, optimized Boolean expression.

---

## 3. Predicate Logic & Formal Specifications

**The Problem:**
When designing system specifications or working with relational databases, translating natural language into formal predicate logic is crucial to avoid ambiguity.

Let the domain of discourse be **all software systems**. Define the following predicates:

* $P(x)$: "$x$ is production-ready."
* $T(x)$: "$x$ has passed all automated tests."
* $M(x)$: "$x$ uses microservices architecture."

Translate the following statements into formal predicate logic formulas using quantifiers ($\forall, \exists$) and logical connectives ($\rightarrow, \land, \lor, \neg$):

1. "Every production-ready software system has passed all automated tests."
2. "There is at least one system using a microservices architecture that is production-ready but has not passed all automated tests."
3. "Only systems that have passed all automated tests are production-ready."

---

## 4. Combinatorics & Discrete Probability

**The Problem:**
You are designing a distributed rate-limiting hashing system. Your system generates unique transaction identifiers.

1. A transaction ID consists of a string of **8 characters**. The first 3 characters must be distinct uppercase letters $(A-Z)$, and the last 5 characters must be digits $(0-9)$ where digits *can* repeat. How many unique transaction IDs can be generated?
2. If an identifier is generated completely at random from the total pool of valid IDs calculated above, what is the exact probability that the 5 digits at the end form a strictly palindromic sequence (e.g., `12321` or `70407`)?

---

## 5. Graph Theory & Network Routing

**The Problem:**
Consider a network of routers represented as an undirected, weighted graph $G = (V, E)$.

```
     [B] --- 2 --- [C]
    /   \         /   \
   4     1       5     1
  /       \     /       \
[A]        [E]           [D]
  \       /     \       /
   3     6       2     3
    \   /         \   /
     [F] --- 7 --- [G]

```

* **Task 1:** Use **Dijkstra’s Algorithm** to find the shortest path and the total path cost from the source node **[A]** to the destination node **[D]**. List the order in which the nodes are visited/settled.
* **Task 2:** Find the **Minimum Spanning Tree (MST)** of this network using either Kruskal's or Prim's algorithm. What is the total weight of the MST?

---

Take your time working through whichever section catches your interest. If you want to check your answers, need a hint for a specific problem, or want to dive deeper into the formal proofs, let me know!
