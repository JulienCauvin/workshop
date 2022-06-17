<?php

class Name
{
    protected $firstname;
    protected $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}

class Mister extends Name
{
    public function getFullName()
    {
        return 'M. ' . parent::getFullName();
    }

    public function setFirstname($value)
    {
        $this->firstname = $value;
    }
}

$mister = new Mister('John', 'Doe');

echo $mister->getFullName(); // M. John Doe

$mister->setFirstname('Julien');

echo $mister->getFullName(); // M. Julien Doe

echo PHP_EOL;
