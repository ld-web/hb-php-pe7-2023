<?php

class Car
{
    public function __construct(
        private int $id,
        private string $name,
        private string $engine,
        private int $year,
        private int $km,
        private string $img
    ) {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEngine(): string
    {
        return mb_strtoupper($this->engine);
    }
    public function setEngine(string $engine): self
    {
        $this->engine = $engine;
        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }
    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function getKm(): int
    {
        return $this->km;
    }
    public function setKm(int $km): self
    {
        $this->km = $km;
        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img): self
    {
        $this->img = $img;
        return $this;
    }
}
