<?php

class User
{
    public int $id;
    public string $firstname;
    public string $lastname;
    public Email $email;

    public function __construct(int $id, string $firstname, string $lastname, Email $email)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getAll(): string
    {
        return implode(' - ', [
            $this->id,
            $this->firstname,
            $this->lastname,
            $this->email->value(),
        ]);
    }
}

class Email
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}

$email = new Email('test@example.com');
$user = new User(123, 'John', 'Doe', $email);

echo $user->getAll(); // 123 - John - Doe - test@example.com

$user = new User(123, 'John', 'Doe', 'test@example.com');
// Fatal error: Uncaught TypeError: User::__construct(): Argument #4 ($email) must be of type Email, string given
