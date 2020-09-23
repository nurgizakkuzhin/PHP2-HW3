<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['id'])) {
    $view = new \App\Classes\View();
    $view->article = \App\Models\Article::findById($_GET['id']);
    $view->display(__DIR__ . '/App/Templates/article.php');
}
