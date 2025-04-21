import { createInterface } from "readline";
import { stdin as input, stdout as output } from "process";

const rl = createInterface({ input, output });

function ask_question(query) {
  return new Promise((resolve) => {
    rl.question(query, resolve);
  });
}

async function main() {
  const number = await ask_question('Choose a number: ');
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
  rl.close();
}

main();
