<?php
<?php
require_once("models/helper.php");
$link = connect();

$id = $_REQUEST['id'];
$date = $_REQUEST['date'];
$title = $_REQUEST['title'];
$note = $_REQUEST['note'];
$result = edit($link, $id, $date, $title, $note);
if (!$result) {
    echo "Статья не отредактирована";
} else {
    header("Location: index.php");
}