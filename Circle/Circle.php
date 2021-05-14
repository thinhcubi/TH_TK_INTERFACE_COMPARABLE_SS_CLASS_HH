<?php

class Circle
{
    public int $radius;
    public string $name;

    public function __construct(string $name, int $radius)
{
    $this->radius = $radius;
    $this->name = $name;
}

    public function getRadius(): int
    {
        return $this->radius;
    }
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }
}
