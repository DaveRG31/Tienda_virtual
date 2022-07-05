<?php

interface Person // Esto es un contrato que se debe cumplir al implementar cualquier clase
{
    public function getName();
}

class Admin implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('Dave');
echo $admin->getName();
