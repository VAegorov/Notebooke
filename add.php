<?php
require_once("models/helper.php");
$link = connect();

if (!isset($_POST['submit'])) {
    include("views/add_v.php");
} else {
    $title = $_POST['title'];
    $note = $_POST['note'];

    $add_note = add_note($link, $title, $note);

    if ($add_note) {
        header("location:index.php");
    } else echo "Заметка не добавлена";
}

