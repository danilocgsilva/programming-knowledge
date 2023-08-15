# Javascript

1. The expression

```
12 + "12"
```

Is evaluated as:

A) `"1212"`

B) `24`

?

2. Check both codes:
```javascript
const amazingFunction = () => {
  let additionalFileContent

  if (this.#developmentContext) {
    developmentContent = `RUN apt-get update && apt-get install vim curl wget zip -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
  `
    additionalFileContent = additionalFileContentHeader + developmentContent + additionalFileContentFooter
  } else {
    additionalFileContent = additionalFileContentHeader + additionalFileContentFooter
  }

  return {
    content: additionalFileContent,
    path: "Dockerfilephp"
  }
}
```

```javascript
const amazingFunction = () => {
  if (this.#developmentContext) {
    developmentContent = `RUN apt-get update && apt-get install vim curl wget zip -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
  `
    const additionalFileContent = additionalFileContentHeader + developmentContent + additionalFileContentFooter
  } else {
    const additionalFileContent = additionalFileContentHeader + additionalFileContentFooter
  }

  return {
    content: additionalFileContent,
    path: "Dockerfilephp"
  }
}
```

Read the sentences below. There is just one that is correct. Which one is correct?

1. Both codes run correctly and lead to the same result.
2. Both codes run correctly, but the results are different.
3. The first code works because the variable `additionalFileContent` can be changed, once it is declared with `let`.
4. The second code works because the variable `additionalFileContent` is declared once within the same flow, as the code flow will pass only once to declare variable as constant.
