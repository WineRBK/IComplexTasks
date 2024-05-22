<?php

class BeastCage
{
    /**
     * Summary of Beast
     * @var Beast
     */
    private Beast|null $beast;

    public function __construct(Beast $beast = null)
    {
        $this->beast = $beast;
    }

    public function getBeast(): Beast
    {
        return $this->beast;
    }

    public function setAnimal(Beast $beast): void
    {
        $this->beast = $beast;
    }
}
