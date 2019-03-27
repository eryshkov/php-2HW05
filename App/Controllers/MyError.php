<?php

namespace App\Controllers;

class MyError extends Controller
{
    protected function handle(): void
    {
        $this->view->display(__DIR__ . '/../../templates/error.php');
    }
}