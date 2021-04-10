<?php

use App\Propiedad;

require_once 'router/router.php';
require_once 'dataBase/database.php';
require_once 'libraries/auth.php';
require_once __DIR__ . '/../vendor/autoload.php';

$propiedad = new Propiedad();