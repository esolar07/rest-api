<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();

// routes
require __DIR__ . "/../routes/api.php";
