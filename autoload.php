<?php

/**
 * @param $class
 * @throws \App\Exceptions\FileNotExistException
 */
function autoload($class)
{
    $file = str_replace('\\', '/', $class) . '.php';
    $fullFilePath = __DIR__ . '/' . $file;
    if (file_exists($fullFilePath)) {
        require $fullFilePath;
    } else {
        throw new \App\Exceptions\FileNotExistException();
    }
}

spl_autoload_register('autoload');