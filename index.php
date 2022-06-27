<?php
class Person{//Esto es una clase
    public function greet(){//Esto es un metodo
        return "Hola $this->name";
    }
}

class User{//Esto es una clase
    public $type;//Esto es un metodo
}

class Admin extends Person{//Esto es una clase
    public $name = 'Administrador';//Esto es un metodo
}

$user = new User;//Esto es un nuevo objeto
$user->type = new Admin;//Esto refiere a la variable que esta dentro de la clase User y crea un nuevo metodo directo a la variable dentro de User
echo $user->type->greet();//Invoca la clase Admin pero guardandola en la variable de User usando el metodo heredado de la clase persona el cual tiene el msj
