<?php

require __DIR__ . '/../autoload.php';

if (isset($_POST['title'], $_POST['content'], $_POST['id'])) {
    $article = \App\Models\Article::findById($_POST['id']);
    if (false === $article) {
        header('Location: /admin/');
        exit();
    }

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();

    header('Location: /admin/');
    exit();
}