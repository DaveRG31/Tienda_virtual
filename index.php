<?php
// final * esta palabra define si puede ser heredada la clase o metodo
class User
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

class Admin extends User
{
    public function getName()
    {
        return "Soy $this->name<br>";
    }
}

$admin = new Admin('Dave');
echo $admin->getName();
