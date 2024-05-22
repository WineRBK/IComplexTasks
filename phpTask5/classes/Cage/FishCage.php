<?php



class FishCage 
{
    /**
     * Summary of Fish
     * @var Fish
     */
    private Fish|null $fish;

    public function __construct(Fish $fish = null)
    {
        $this->fish = $fish;
    }

    public function getFish(): Fish
    {
        return $this->fish;
    }

    public function setAnimal(Fish $fish): void
    {
        $this->fish = $fish;
    }


}