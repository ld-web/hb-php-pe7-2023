<?php

require_once __DIR__ . '/EmailError.php';

class Email
{
    private string $email;

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
}
