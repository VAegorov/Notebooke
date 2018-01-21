<?php
require_once("models/helper.php");
$link = connect();

$id = $_REQUEST['id'];
$result = delete($link, $id);
if (!$result) {
    echo "Статья не удалена";
} else {
    header("Location: index.php");
}