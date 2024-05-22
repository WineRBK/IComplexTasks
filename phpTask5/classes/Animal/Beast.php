<?php

require_once ('./phpTask5/classes/Animal/BaseAnimal.php');

class Beast extends BaseAnimal
{
    private int $paws;
    public function __construct(string $kingdom, int $eyes, bool $tail, int $paws)
    {
        parent::__construct($kingdom, $eyes, $tail);
        $this->paws = $paws;
    }
    public function getPaws(): int
    {
        return $this->paws;
    }


}