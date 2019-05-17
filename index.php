<?php
/**
 * @var BaseController $ctrl
 */

use App\Controllers\BaseController;
use App\Controllers\Errors\RecNotFound;
use App\Controllers\Errors\SmthWrong;
use App\Exceptions\DbErrorException;
use App\Exceptions\RecordNotFoundException;
use App\Logger;
use App\Router;

require __DIR__ . '/autoload.php';

try {
    $ctrlClass = (new Router())->getControllerName();
    
    /** @var BaseController $ctrl */
    $ctrl = new $ctrlClass;
    $ctrl->action();
} catch (DbErrorException $e) {
    Logger::log($e);
    $ctrl = new SmthWrong();
    $ctrl->action();
} catch (RecordNotFoundException $e) {
    Logger::log($e);
    $ctrl = new RecNotFound();
    $ctrl->action();
} catch (Throwable $e) {
    $ctrl = new SmthWrong();
    $ctrl->action();
}
