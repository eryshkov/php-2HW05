<?php

namespace App\Exceptions;

use App\Logger;

abstract class ExceptionModel extends \Exception
{
    /**
     * ExceptionModel constructor.
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(string $message = '', int $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        Logger::add($this);
    }
}