<?php

class Manager
{

    public static function createAnimal(string $kingdom, int $eyes, int $tail, int $paws = null, int $wings = null, $gills = null)
    {
        switch ($kingdom) {
            case 'beast':
                return new Beast('beast', $eyes, $tail, $paws);
            case 'bird':
                return new Bird('bird', $eyes, $tail, $paws, $wings);
            case 'fish':
                return new Fish('fish', $eyes, $tail, $gills);
            default:
                return 'undefined kingdom';
        }
    }

}