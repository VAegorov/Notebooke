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
<h1>Редактировать запись</h1>
    <div>
        <?php
        foreach ($note_one as $elem):
        ?>
        <form action="edit.php" method="POST">
            <p><input type="text" hidden name="id" value="<?=$elem['id']; ?>"></p>
            <p><input type="text" name="date" value="<?=$elem['date']; ?>"></p>
            <p><input type="text" name="title" value="<?=$elem['title']; ?>"></p>
            <p><textarea name="note"><?=$elem['note']; ?></textarea></p>
            <p><input type="submit" name="submit" value="Сохранить"></p>
        </form>
        <?php
        endforeach;
        ?>
    </div>
</body>
</html>