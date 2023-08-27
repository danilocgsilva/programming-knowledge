<?php

declare(strict_types=1);

namespace Danilocgsilvame\TreeWaterBottles;

final class Bottle
{
    public function __construct(
        private readonly float $capacity,
        private float $currentLevel
    ) {
    }

    public function getCapacity(): float
    {
        return $this->capacity;
    }

    public function getCurrentLevel(): float
    {
        return $this->currentLevel;
    }

    public function pour(Bottle $bottle): void
    {
        $amountToPour = min(
            $this->currentLevel, 
            $bottle->getCapacity() - $bottle->getCurrentLevel()
        );

        $this->currentLevel -= $amountToPour;
        $bottle->fill($amountToPour);
    }

    public function fill(float $amount): void
    {
        $this->currentLevel += $amount;
    }
}