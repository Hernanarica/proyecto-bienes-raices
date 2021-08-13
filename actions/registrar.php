<?php

use App\Usuario\Usuario;

require_once __DIR__ . '/../vendor/autoload.php';

$name     = $_POST[ 'name' ];
$lastName = $_POST[ 'lastName' ];
$email    = $_POST[ 'email' ];
$password = password_hash($_POST[ 'password' ], PASSWORD_DEFAULT);

$success = (new Usuario)->register($name, $lastName, $email, $password);

$success ? header('location: ../index.php?s=home') : exit();