<?php

function getUserInput(): string
{
    print("Give me a number to sum up to it: ");
    $rawUserInput = fgets(STDIN);
    $userInputWithoutNewline = str_replace("\n", "", $rawUserInput);
    return $userInputWithoutNewline;
}

/**
 * @return array{is_valid: bool, reason: string}
 */
function checkUserInput(string $userInput): array
{
    if ($userInput < 1) {
        return [
            "is_valid" => false,
            "reason" => "The input must be a number equals or greater than zero."
        ];
    }

    if (!is_numeric($userInput)) {
        return [
            "is_valid" => false,
            "reason" => "The input cannot be converted to a number. Is a number provided by the user?"
        ];
    }

    return [
        "is_valid" => true,
        "reason" => ""
    ];
}

function printsSum(int $inputNumeric): void
{
    $sum = 0;
    for ($i = 1; $i <= $inputNumeric; $i++) {
        $sum += $i;
    }
    print($sum . PHP_EOL);
}

$userInput = getUserInput();
$inputChecks = checkUserInput($userInput);
if ($inputChecks["is_valid"]) {
    $numericInput = (int) $userInput;
    printsSum($numericInput);
} else {
    print("The user input is not valid: {$inputChecks["reason"]}." . PHP_EOL);
}

