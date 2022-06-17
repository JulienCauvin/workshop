<?php

class User
{
    private $id;
    private $firstname;
    private $lastname;

    public function __construct($id, $firstname, $lastname)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}

$user = new User(123, 'John', 'Doe');

echo $user->getId(); // 123
echo $user->getFirstname(); // John
echo $user->getLastname(); // Doe

echo $user->getFullName(); // John Doe

echo PHP_EOL;
