const readline = require("node:readline");

const r1 = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

r1.question("Give me a number to sum from 1 up to it: ", number => {
    let numeric_answer = parseInt(number);
    if (!numeric_answer) {
        console.log("I cannot convert the answer to a number to calculates.");
    } else if (numeric_answer < 1) {
        console.log("The response must be greater than zero.");
    } else {
        let sum = 0;
        for (let i = 1; i <= numeric_answer; i++) {
            sum += i;
        }
        console.log(`The sum up to ${number} is ${sum}.`)
    }

    r1.close();
})
