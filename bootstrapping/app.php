<?php
session_start();

const PATH_ROUTER   = 'router/router.php';
const PATH_AUTOLOAD = '/../vendor/autoload.php';

require_once PATH_ROUTER;
require_once __DIR__ . PATH_AUTOLOAD;