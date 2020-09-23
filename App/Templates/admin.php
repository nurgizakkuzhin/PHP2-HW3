<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4 mx-auto ">Hello world!</h1>
        <hr class="my-4">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary" href="/index.php">Главная страниц</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-danger active" href="/admin/">Админ</a>
            </li>
        </ul>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">
                    <a href="/admin/create.php" class="btn btn-outline-success" role="button" aria-pressed="true">Добавить
                        новость</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($articles as $article):?>
                <tr>
                    <td>
                        <a class="btn btn-outline-info"
                           href="/admin/edit.php?id=<?php echo $article->id; ?>">
                            ✎
                        </a>
                        <a class="btn btn-outline-danger"
                           href="/admin/delete.php?id=<?php echo $article->id; ?>">
                            X
                        </a>
                        <a href="/article.php?id=<?php echo $article->id; ?>"
                           class="text-decoration-none">
                            <?php echo $article->title; ?>
                        </a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>