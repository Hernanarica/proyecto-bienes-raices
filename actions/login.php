<?php

use App\Auth\Auth;
use App\Validation\Validation;
use App\Session\Session;

session_start();

require_once "../vendor/autoload.php";
require_once "../libraries/notification.php";

try {
   $validate = new Validation($_POST, [
       'email'    => ['required', 'min:10'],
       'password' => ['required'],
   ]);
   
   if (!$validate->passes()) {
      $email    = $_POST[ 'email' ];
      $password = $_POST[ 'password' ];
      
      $auth = (new Auth())->Autenticate($email, $password);
      
      if (!$auth) {
         showNotificationLogin('error', 'Los datos ingresados no son correctos.');
         header('location: ../index.php?s=login');
         exit();
      }
      
      showNotificationLogin('success', 'Bienvenido! ' . Session::get('user')[ 'name' ]);
      header('location: ../index.php?s=home');
      exit();
   }
   
   Session::set('oldData', [
       'email' => $_POST[ 'email' ]
   ]);
   Session::set('errors', $validate->getErrores());
   
   header('location: ../index.php?s=login');
   exit();
} catch (Exception $e) {
   echo "Error en la linea: {$e->getLine()} del archivo {$e->getFile()} con el mensaje {$e->getMessage()}";
}