<?php

require __DIR__ . '/autoload.php';


$view = new \App\Classes\View();
$view->articles = \App\Models\Article::findAll();
$view->display(__DIR__ . '/App/Templates/news.php');
