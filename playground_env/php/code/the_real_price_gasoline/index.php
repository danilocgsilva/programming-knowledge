<?php

use Exception;

class ValueNotNumericException {
    
}

function printNewLine(string $message) {
    print($message . "\n");
}

function calculates() {
    $gasolinePrice = readline("Which is the gasoline price? ");
    $alcoholPrice = readline("Which is the alcohol price? ");
    $alcoholPercent = readline("Which is the alcohol content in the gasoline? Quantity must be in percent. ");
    
    printNewLine("The gasoline price provided is {$gasolinePrice}.");
    printNewLine("The alcohol price provided is {$alcoholPrice}.");
    printNewLine("The alcohol percent in the gasoline is {$alcoholPercent}.");
}

try {
    calculates();
} catch (Exception $e) {
    printNewLine($e->getMessage());
}


