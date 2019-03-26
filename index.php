<?php
require __DIR__ . '/autoload.php';

$router = new \App\Router();
$ctrlClass = $router->getControllerName();

$ctrl = new $ctrlClass;
$ctrl->setParameters($router->getParameters());
$ctrl->action();
