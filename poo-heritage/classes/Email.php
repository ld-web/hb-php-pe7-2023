<?php

require_once __DIR__ . '/EmailError.php';
require_once __DIR__ . '/Exception/EmptyEmailException.php';
require_once __DIR__ . '/Exception/InvalidEmailException.php';
require_once __DIR__ . '/IFormattable.php';

class Email implements IFormattable, IListItem
{
    private string $email;

    /**
     * @param string $email
     * @throws InvalidArgumentException if email is empty or invalid
     */
    public function __construct(string $email)
    {
        $this->email = $email;

        if (empty($this->email)) {
            throw new EmptyEmailException();
        }

        if (!$this->isValid()) {
            throw new InvalidEmailException();
        }
    }

    public function getValue(): string
    {
        return $this->email;
    }

    public function getLabel(): string
    {
        return $this->email;
    }

    public function format(): string
    {
        return "formatted email";
    }

    public function display(): void
    {
        echo $this->email;
    }

    private function isValid(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function getDomain(): string
    {
        return ltrim(strstr($this->email, '@'), '@');
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
