<?php

class Author
{
    private DateTime $birthDate;

    public function __construct(
        private string $name,
        private string $firstname,
        string $birthDate
    ) {
        $this->birthDate = new DateTime($birthDate);
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }
    public function setBirthDate(DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
}
