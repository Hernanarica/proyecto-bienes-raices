<?php
require_once '../vendor/autoload.php';

use App\Session\Session;

session_start();

if (Session::get('user')) {
	Session::remove('user');
	header('location: ../index.php?s=login');
	exit();
}

//TODO Avisar si no puedo ser cerrada la sesión