<?php

use App\Auth\Auth;
use App\Usuario\Usuario;

require_once "../vendor/autoload.php";

session_start();

$email    = $_POST[ 'email' ];
$password = $_POST[ 'password' ];

$auth = (new Auth())->Autenticate($email, $password);

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
exit();

