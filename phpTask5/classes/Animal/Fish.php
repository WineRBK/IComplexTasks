<?php

require_once ('./phpTask5/classes/Animal/BaseAnimal.php');
class Fish extends BaseAnimal
{
    private int $gills;
    public function __construct(string $kingdom, int $eyes, bool $tail, int $gills)
    {
        parent::__construct($kingdom, $eyes, $tail);
        $this->gills = $gills;
    }
    public function getGills(): int
    {
        return $this->gills;
    }


}