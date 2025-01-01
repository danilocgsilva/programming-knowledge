<?php

declare(strict_types=1);

function printNewLine(string $message)
{
    print ($message . "\n");
}

function responds()
{
    $gasolinePrice = getValue("Which is the gasoline price for one liter? ");
    $alcoholPrice = getValue("Which is the alcohol price for one liter? ");
    $alcoholPercent = getValue("Which is the alcohol content in the gasoline? Quantity must be in percent. ");

    calculates($gasolinePrice, $alcoholPrice, $alcoholPercent);
}

function calculates(float $gasolinePrice, float $alcoholPrice, float $alcoholPercentAmount)
{
    $percentCalculation = $alcoholPercentAmount / 100;

    $alcoholPricePercent = $alcoholPrice * $percentCalculation;

    $pureGasolinePriceFromRemaining = $gasolinePrice - $alcoholPricePercent;

    $fullGasolinePrice = $pureGasolinePriceFromRemaining / (1.0 - $percentCalculation);

    printNewLine("The full price of a liter of gasoline is " . $fullGasolinePrice);
}

function getValue(string $askingMessage): float
{
    while (true) {
        $initialInput = readline($askingMessage);
        if (!$initialInput) {
            printNewLine("Value not given.");
            sleep(1);
            continue;
        }
        if (!is_numeric($initialInput)) {
            printNewLine("The value must be numeric.");
            sleep(1);
            continue;
        }
        return (float) $initialInput;
    }
}
