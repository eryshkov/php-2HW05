<?php
require __DIR__ . '/autoload.php';

try {
    $router = new \App\Router();
    $ctrlClass = $router->getControllerName();
    $ctrl = new $ctrlClass;
    $ctrl->setParameters($router->getParameters());
    $ctrl->action();
} catch (Throwable $e) {
    $ctrl = new \App\Controllers\MyError();
    $ctrl->action();
}
