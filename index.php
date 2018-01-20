<?php
require_once ("models/helper.php");
$link = connect();
$notes = notes($link);

include("views/notes_v.php");