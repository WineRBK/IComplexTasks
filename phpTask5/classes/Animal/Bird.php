<?php

require_once ('./phpTask5/classes/Animal/BaseAnimal.php');

class Bird extends BaseAnimal
{
    private int $wings;
    private int $paws;
    public function __construct(string $kingdom, int $eyes, bool $tail, int $paws, int $wings)
    {
        parent::__construct($kingdom, $eyes, $tail);
        $this->paws = $paws;
        $this->wings = $wings;
    }

    public function getWings(): int
    {
        return $this->wings;
    }

    public function getPaws(): int
    {
        return $this->paws;
    }


}