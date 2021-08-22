<?php

use App\Auth\Auth;
use App\Validation\Validation;
use App\Session\Session;

session_start();

require_once "../vendor/autoload.php";

// TODO: Validate the data entered
try {
	$validate = new Validation($_POST, [
		'email'    => ['required', 'min:10'],
		'password' => ['required'],
	]);

	if (!$validate->passes()) {
		$email    = $_POST[ 'email' ];
		$password = $_POST[ 'password' ];

		$auth = (new Auth())->Autenticate($email, $password);

		$auth ? header('location: ../index.php?s=home') : header('location: ../index.php?s=login');
		exit();
	}

	Session::set('oldData', $_POST);
	Session::set('errors', $validate->getErrores());

	header('location: ../index.php?s=login');
	exit();
} catch (Exception $e) {
	echo "Error en la linea: {$e->getLine()} del archivo {$e->getFile()} con el mensaje {$e->getMessage()}";
}


