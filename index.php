<?php
/**
 * @var \App\Controllers\BaseController $ctrl
 */

use App\Logger;

require __DIR__ . '/autoload.php';

try {
    $router = new \App\Router();
    $ctrlClass = $router->getControllerName();
    $ctrl = new $ctrlClass;
    $ctrl->setParameters($router->getParameters());
    $ctrl->action();
} catch (\App\Exceptions\DbErrorException $e) {
    Logger::log($e);
    $ctrl = new \App\Controllers\Errors\SmthWrong();
    $ctrl->action();
} catch (\App\Exceptions\RecordNotFoundException $e) {
    Logger::log($e);
    $ctrl = new \App\Controllers\Errors\RecNotFound();
    $ctrl->action();
} catch (Throwable $e) {
    $ctrl = new \App\Controllers\Errors\SmthWrong();
    $ctrl->action();
}
