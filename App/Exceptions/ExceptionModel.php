<?php

namespace App\Exceptions;

abstract class ExceptionModel extends \Exception
{
    /**
     * ExceptionModel constructor.
     * @param string $message
     * @param string $code
     * @param \Exception $previous
     */
    public function __construct(string $message = '', int $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        //Logger call here
    }
}