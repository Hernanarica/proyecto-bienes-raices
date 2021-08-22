<?php

use App\Usuario\Usuario;
use App\Validation\Validation;
use App\Session\Session;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
//TODO: Validate the form data
try {
	$validation = new Validation($_POST, [
		'name'     => ['required'],
		'lastName' => ['required'],
		'email'    => ['required', 'min:5'],
		'password' => ['required'],
	]);

	if (!$validation->passes()) {
		$name     = $_POST[ 'name' ];
		$lastName = $_POST[ 'lastName' ];
		$email    = $_POST[ 'email' ];
		$password = password_hash($_POST[ 'password' ], PASSWORD_DEFAULT);

		$success = (new Usuario)->register($name, $lastName, $email, $password);

		$success ? header('location: ../index.php?s=home') : header('location: ../index.php?s=registro');
		exit();
	}
	Session::set('oldData', $_POST);
	Session::set('errors', $validation->getErrores());

	header('location: ../index.php?s=registro');
	exit();
} catch (Exception $e) {
	echo "Error en la linea: {$e->getLine()} del archivo {$e->getFile()} con el mensaje {$e->getMessage()}";
}