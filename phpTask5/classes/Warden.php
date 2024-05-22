<?php

class Warden
{
    public function __construct()
    {
    }

    public function placeAnimal(Beast|Bird|Fish $animal, BeastCage|BirdCage|FishCage $cage)
    {

        switch ($animal->getKingdom()) {
            case 'beast':
                $cage->setAnimal($animal);
                break;
            case 'bird':
                $cage->setAnimal($animal);
                break;
            case 'fish':
                $cage->setAnimal($animal);
                break;
        }
    }

    public function getAnimal(CageList $cageList, string $kingdom)
    {
        switch ($kingdom) {
            case 'beast':
                return $cageList->getCage($kingdom)->getBeast();
            case 'bird':
                return $cageList->getCage($kingdom)->getBird();
            case 'fish':
                return $cageList->getCage($kingdom)->getFish();
        }
    }

}