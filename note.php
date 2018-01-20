<?php
require_once("models/helper.php");
$link = connect();

$note_one = note_one($link);

include("views/note_v.php");