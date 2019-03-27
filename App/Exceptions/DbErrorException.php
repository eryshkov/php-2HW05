<?php

namespace App\Exceptions;

class DbErrorException extends \Exception
{
    /**
     * DbException constructor.
     * @param \Exception|null $exception
     */
    public function __construct(\Exception $exception = null)
    {
        if (isset($exception)) {
            parent::__construct($exception->getMessage(), $exception->getCode(), $exception->getPrevious());
            return;
        }

        parent::__construct();
    }
}
