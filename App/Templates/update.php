</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
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
        <hr class="my-4">
        <h4>Редактирование</h4>
        <div>
            <form action="/admin/update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $article->id; ?>">
                <div class="form-group">
                    <label for="formGroupExampleInput">Заголовок</label>
                    <input type="text" name="title" class="form-control" id="formGroupExampleInput"
                           placeholder="Введите заголовок" value="<?php echo $article->title; ?>">
                </div>
                <div class="form-group">
                    <label for="validationTextarea">Содержание</label>
                    <textarea class="form-control" name="content" rows="10" id="validationTextarea"
                              placeholder="Введите текст"><?php echo $article->content; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
                <a href="/admin/" class="btn btn-primary">Отменить</a>
            </form>
        </div>
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