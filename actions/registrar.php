<?php

use App\Usuario\Usuario;
use App\Validation\Validation;
use App\Session\Session;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../libraries/notification.php';

try {
   $validation = new Validation($_POST, [
       'name'     => ['required', 'min:2'],
       'lastName' => ['required', 'min:2'],
       'email'    => ['required', 'min:10'],
       'password' => ['required'],
   ]);
   
   if (!$validation->passes()) {
      $name     = $_POST[ 'name' ];
      $lastName = $_POST[ 'lastName' ];
      $email    = $_POST[ 'email' ];
      $password = password_hash($_POST[ 'password' ], PASSWORD_DEFAULT);
      
      $registered = (new Usuario)->register($name, $lastName, $email, $password);
      
      if (!$registered) {
         showNotificationLogin('error', 'Ops ha ocurrido un error en tu registro');
         header('location: ../index.php?s=registro');
         exit();
      }
      
      showNotificationLogin('success', 'Te has registrado con éxito');
      header('location: ../index.php?s=home');
      exit();
   }
   
   Session::set('oldData', $_POST);
   Session::set('errors', $validation->getErrores());
   
   header('location: ../index.php?s=registro');
   exit();
} catch (Exception $e) {
   echo "Error en la linea: {$e->getLine()} del archivo {$e->getFile()} con el mensaje {$e->getMessage()}";
}