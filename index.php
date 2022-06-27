<?php
require_once "Person.php";
require_once "User.php";
require_once "Admin.php";

$user = new User;//Esto es un nuevo objeto
$user->type = new Admin;//Esto refiere a la variable que esta dentro de la clase User y crea un nuevo metodo directo a la variable dentro de User
echo $user->type->greet();//Invoca la clase Admin pero guardandola en la variable de User usando el metodo heredado de la clase persona el cual tiene el msj
