<?php


class BirdCage
{
    /**
     * Summary of bird
     * @var Bird
     */
    private Bird|null $bird;

    public function __construct(Bird $bird = null)
    {
        $this->bird = $bird;
    }

    public function getBird(): Bird
    {
        return $this->bird;
    }

    public function setAnimal(Bird $bird): void
    {
        $this->bird = $bird;
    }


}