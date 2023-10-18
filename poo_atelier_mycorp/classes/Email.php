<?php

require_once __DIR__ . '/EmailError.php';

class Email
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
            throw new InvalidArgumentException(code: EmailError::EMPTY);
        }

        if (!$this->isValid()) {
            throw new InvalidArgumentException(code: EmailError::INVALID);
        }
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
