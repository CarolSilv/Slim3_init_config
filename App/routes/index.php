<?php

use App\Controllers\Controller;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

   $app->GET('/', Controller::class . ':Index');

$app->run();