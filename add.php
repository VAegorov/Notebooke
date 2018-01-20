<?php
require_once("models/helper.php");
$link = connect();
var_dump($_REQUEST);
if (!isset($_POST['submit'])) {
    include("views/add_v.php");
} else {
    //add($link, $title, $note);
    //header("location:index.php");
    echo "hhhhhhhhhhh";
}

