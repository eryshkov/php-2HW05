<?php

namespace App\Models;

use App\Db;

class User extends Model
{
    /**
     * @var string
     */
    protected static $table = 'users';

    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $password;

}
