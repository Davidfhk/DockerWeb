<?php

namespace App;

error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set("Europe/Madrid");

require("../vendor/autoload.php");

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];

$app = new \Slim\App($configuration);

$container = $app->getContainer();

$entorno   = "dev";

require "Dependencies.php";     // Web services
require "Routes.php";           // Routing