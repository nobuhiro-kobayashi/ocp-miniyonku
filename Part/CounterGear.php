<?php

class CounterGear
{
    private $size;
    private $color;
    private $material;

    public function __construct(int $size, string $color, string $material)
    {
        $this->size = $size;
        $this->color = $color;
        $this->material = $material;
    }
    public function getSize(): int
    {
        return $this->size;
    }
}

