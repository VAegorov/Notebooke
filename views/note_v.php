<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css1.css">
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
        <p><?=nl2br($elem['note']); ?></p>
        <?php
            endforeach;
        ?>
    </div>
    <div>
        <form action="delete.php" method="GET">
            <input type="text" hidden name="id" value="<?=$elem['id']; ?>">
            <p><input type="submit" name="delete" value="Удалить"></p>
        </form>
    </div><div>
        <form action="edit.php" method="GET">
            <input type="text" hidden name="id" value="<?=$elem['id']; ?>">
            <p><input type="submit" name="edit" value="Редактировать"></p>
        </form>
    </div>

</body>
</html>