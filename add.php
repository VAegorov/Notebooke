<?php
require_once("models/helper.php");
$link = connect();
var_dump($_REQUEST);
if (!isset($_POST['submit'])) {
    include("views/add_v.php");
} else {
    $title = $_POST['title'];
    $note = $_POST['note'];

    $add_note = add_note($link, $title, $note);
    var_dump($add_note);
    if ($add_note) {
        header("location:index.php");
    } else echo "Заметка не добавлена";
}

