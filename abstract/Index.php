<?php
require_once "Guest.php";
require_once "Admin.php";
require_once "User.php";


$guest = new Guest();
echo $guest->login();

$user = new User('Anita');
echo $user->login();

$admin = new Admin('Dave');
echo $admin->login();