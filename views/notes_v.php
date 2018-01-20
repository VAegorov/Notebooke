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
    <h1>Список записей</h1>
    <div>
    <?php
    foreach ($notes as $elem):
    ?>
        <p><span><?=$elem['date']; ?> </span><a href="note.php?id=<?=$elem['id']?>"><?=$elem['title']; ?></a></p>
        <p><?=nl2br($elem['note']); ?></p>
    <?php
    endforeach;
    ?>
    </div>
    <form action="add.php" method="GET">
        <input type="submit" name="add" value="Добавить статью">
    </form>
    <p>add note</p>

</body>
</html>