<?php

namespace App\Controllers;

class Article extends Controller
{
    protected function handle(): void
    {
        $parameter = $this->getParameters();

        $this->view->article = \App\Models\Article::findById(reset($parameter));
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
