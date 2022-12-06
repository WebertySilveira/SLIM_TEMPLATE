<?php

use Slim\Factory\AppFactory;
use Src\site\Home;

$app = AppFactory::create();
$app->get('/teste', [Home::class, 'index']);
return $app;