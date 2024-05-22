<?php

class CageFactory
{
    public function createCage(string $kingdom)
    {
        switch ($kingdom) {

            case 'beast':
                return new BeastCage();
            case 'bird':
                return new BirdCage();
            case 'fish':
                return new FishCage();
            default:
                return 'undefined Cage';
        }
    }
}