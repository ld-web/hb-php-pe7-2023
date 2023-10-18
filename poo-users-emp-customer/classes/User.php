<?php

class User
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $password,
        protected string $email
    ) {
    }

    public function getIntroduction(): string
    {
        return "Bonjour, je m'appelle " . $this->name . " et mon email est " . $this->email;
    }

    public function getId(): int
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

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
