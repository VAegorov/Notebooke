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
    <div>
        <h1>Новая запись</h1>
        <form action="add.php" method="POST">
            <p><input type="text" name="title" placeholder="Название записи"></p>
            <p><textarea name="note" placeholder="Текст записи"></textarea></p>
                <input type="submit" name="submit" value="Сохранить">
        </form>
    </div>
</body>
</html>