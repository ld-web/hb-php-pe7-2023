<?php

require_once __DIR__ . '/Product.php';

class ProductCirc extends Product
{
    private int $diameter;

    public function __construct(string $name, int $diameter)
    {
        parent::__construct($name);
        $this->diameter = $diameter;
    }

    public function getDiameter(): int
    {
        return $this->diameter;
    }
    public function setDiameter(int $diameter): self
    {
        $this->diameter = $diameter;
        return $this;
    }
}
