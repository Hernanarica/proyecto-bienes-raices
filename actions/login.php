<?php

use App\Auth\Auth;

require_once "../vendor/autoload.php";

session_start();

$email    = $_POST[ 'email' ];
$password = $_POST[ 'password' ];

$auth = (new Auth())->Autenticate($email, $password);

header('location: ../index.php?s=home');