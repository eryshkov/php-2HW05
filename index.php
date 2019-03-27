<?php
require __DIR__ . '/autoload.php';

try {
    $router = new \App\Router();
    $ctrlClass = $router->getControllerName();
    $ctrl = new $ctrlClass;
    $ctrl->setParameters($router->getParameters());
    $ctrl->action();
} catch (\App\Exceptions\DbException $e) {
    $ctrl = new \App\Controllers\Errors\SmthWrong();
    $ctrl->action();
} catch (\App\Exceptions\FileNotExistException $e) {
    $ctrl = new \App\Controllers\Errors\Error404();
    $ctrl->action();
} catch (\App\Exceptions\RecordNotFoundException $e) {
    $ctrl = new \App\Controllers\Errors\RecNotFound();
    $ctrl->action();
}

