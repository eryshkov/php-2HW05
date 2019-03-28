<?php

namespace App;

class Logger
{
    protected $storage = __DIR__ . '/../log.txt';

    public function add(\Exception $data): void
    {
        $date = date(DATE_ATOM);
        $logString = [
            $date,
            $data->getFile(),
            $data->getLine(),
            get_class($data),
        ];

        file_put_contents($this->storage, implode(' | ', $logString) . PHP_EOL, FILE_APPEND);
    }
}