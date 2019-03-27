<?php

namespace App\Exceptions;

class Errors extends \Exception
{
    protected $errors = [];

    public function add(\Exception $e): void
    {
        $this->errors[] = $e;
    }

    /**
     * @return \Exception[]
     */
    public function getAll(): array
    {
        return $this->errors;
    }

    public function isEmpty(): bool
    {
        return empty($this->errors);
    }
}