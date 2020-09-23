<?php

require __DIR__ . '/../autoload.php';

if (isset($_POST['title'], $_POST['content'])) {
    $article = new \App\Models\Article();

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();

    header('Location:' . '/admin/');
    exit();
}