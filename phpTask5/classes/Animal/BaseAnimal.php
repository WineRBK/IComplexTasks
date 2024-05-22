<?php
/**
 * Summary of BaseAnimal
 */
class BaseAnimal
{
    private string $kingdom;
    private int $eyes;
    private bool $tail;
    public function __construct(string $kingdom, int $eyes, bool $tail)
    {
        $this->kingdom = $kingdom;
        $this->eyes = $eyes;
        $this->tail = $tail;
    }
    public function getKingdom(): string
    {
        return $this->kingdom;
    }

    public function getEyes(): int
    {
        return $this->eyes;
    }

    public function getTail(): bool
    {
        return $this->tail;
    }


}