<?php

require_once __DIR__ . '/FormatMode.php';

class User
{
    // Constantes


    // Propriétés
    private string $name;
    private string $firstname;
    private bool $active;
    private DateTime $birthDate;

    // Méthodes
    public function __construct(
        string $name,
        string $firstname,
        DateTime $birthDate,
        bool $active = true
    ) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthDate = $birthDate;
        $this->active = $active;
    }

    /**
     * Returns User's full name
     *
     * @param int $order Format order
     * @return string Format : "name firstname"
     */
    public function getFullName(int $order = FormatMode::NAME_THEN_FIRSTNAME): string
    {
        if ($order === FormatMode::FIRSTNAME_THEN_NAME) {
            return $this->firstname . ' ' . $this->name;
        }
        return $this->name . " " . $this->firstname;
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

    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
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
}
