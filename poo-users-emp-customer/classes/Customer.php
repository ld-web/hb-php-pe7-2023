<?php

class Customer extends User
{
    public function __construct(
        int $id,
        string $name,
        string $password,
        string $email,
        private int $clientNumber,
        private bool $premium
    ) {
        parent::__construct($id, $name, $password, $email);
    }

    public function getIntroduction(): string
    {
        $premiumText = ($this->premium) ? ", je suis premium" : "";

        return parent::getIntroduction() . ", mon numéro client est " . $this->clientNumber . $premiumText . ".";
    }

    public function getClientNumber(): int
    {
        return $this->clientNumber;
    }
    public function setClientNumber(int $clientNumber): self
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }

    public function getPremium(): bool
    {
        return $this->premium;
    }
    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;
        return $this;
    }
}
