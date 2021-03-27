<?php

class Car
{
    private int $wheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start() :string
    {
        $this -> currentSpeed = 15;
        return "En voiture Simone ! <br>";
    }

    public function forward(): string
    {
        $this -> currentSpeed += 15;
        return "GO !";
    }

    public function brake(): string
    {
        $sentence = "";
        while($this ->currentSpeed > 0){
            $this ->currentSpeed-=  10;
            $sentence .= "Brake ! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getWheels(): int
    {
        return $this->wheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
