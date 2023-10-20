<?php

require_once __DIR__ . '/Product.php';

class ProductCirc extends Product
{
    private int $diameter;

    public function __construct(int $id, string $name, int $diameter)
    {
        parent::__construct($id, $name);
        $this->diameter = $diameter;
    }

    public function getSurface(): float
    {
        return M_PI * (($this->diameter / 2) ** 2);
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
