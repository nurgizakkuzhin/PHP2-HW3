<?php

require __DIR__ . '/../autoload.php';

if (isset($_GET['id'])) {
    $article = \App\Models\Article::findById($_GET['id']);
    if (false === $article) {
        header('Location: /admin/');
        exit();
    }
}

include __DIR__ . '/../App/Templates/update.php';
