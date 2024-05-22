<?php

require_once ('./phpTask5/classes/Cage/BeastCage.php');
require_once ('./phpTask5/classes/Cage/BirdCage.php');
require_once ('./phpTask5/classes/Cage/FishCage.php');

class CageList
{
    private array $cageList = [];
    public function __construct()
    {
    }

    public function addCage(string $cageName)
    {
        switch ($cageName) {

            case 'beast':
                $this->cageList[] = new BeastCage();
                break;
            case 'bird':
                $this->cageList[] = new BirdCage();
                break;
            case 'fish':
                $this->cageList[] = new FishCage();
                break;
            default:
                return 'undefined kingdom';
        }
    }

    public function getCage(string $cageName)
    {
        switch ($cageName) {
            case 'beast':
                return $this->cageList[array_search('BeastCage', $this->cageList)];
            case 'bird':
                return $this->cageList[array_search('BirdCage', $this->cageList)];
            case 'fish':
                return $this->cageList[array_search('FishCage', $this->cageList)];
            default:
                return 'undefined kingdom';
        }
    }
}