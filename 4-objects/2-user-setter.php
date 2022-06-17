<?php

class User
{
    public $id;
    public $firstname;
    public $lastname;

    public function __construct($id, $firstname, $lastname)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function setName($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

$user = new User(123, 'John', 'Doe');

echo $user->id; // 123
echo $user->firstname; // John
echo $user->lastname; // Doe

echo $user->getFullName(); // John Doe

$user->setName('Julien', 'Cauvin');

echo $user->getFullName(); // Julien Cauvin

echo PHP_EOL;
