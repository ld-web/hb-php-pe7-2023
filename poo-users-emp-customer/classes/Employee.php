<?php

require_once __DIR__ . '/User.php';

class Employee extends User
{
    public function __construct(
        int $id,
        string $name,
        string $password,
        string $email,
        private int $empNumber
    ) {
        parent::__construct($id, $name, $password, $email);
    }

    public function getIntroduction(): string
    {
        return parent::getIntroduction() . ", mon numéro d'employé est " . $this->empNumber;
    }

    public function getEmpNumber(): int
    {
        return $this->empNumber;
    }
    public function setEmpNumber(int $empNumber): self
    {
        $this->empNumber = $empNumber;
        return $this;
    }
}
