<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notebook</title>
</head>
<body>
    <a href="index.php">На главную</a>
    <div>
        <?php
            foreach ($note_one as $elem):
        ?>
        <h2><?=$elem['title']; ?></h2>
        <p><?=$elem['date']; ?></p>
        <p><?=$elem['note']; ?></p>
        <?php
            endforeach;
        ?>
    </div>
    <p>edit</p>
    <p>delete</p>
</body>
</html>