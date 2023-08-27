<?php

declare(strict_types=1);

namespace Danilocgsilvame\TreeWaterBottles;

final class Bottle 
{
    public function __construct(
        private readonly float $capacity,
        private float $currentLevel
    ) {}

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
        $this->currentLevel = $bottle->removeLevel();
    }

    public function removeLevel(): float
    {
        $levelToPour = $this->currentLevel;
        $this->currentLevel = 0.0;
        return $levelToPour;
    }
}

