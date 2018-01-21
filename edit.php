<?php

require_once("models/helper.php");
$link = connect();



if (isset($_REQUEST['edit'])) {
    $note_one = note_one($link, $_GET['id']);
    include("views/edit_v.php");
} else {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $note = $_POST['note'];
    $result = edit($link, $id, $date, $title, $note);
    if (!$result) {
        echo "Статья не отредактирована";
    } else {
        header("Location: index.php");

    }
}
