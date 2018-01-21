<?php

function connect()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'test';

    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_set_charset($link, 'UTF8') or die(mysqli_error($link));
    return $link;
}

function notes($link)
{
    $query = "SELECT * FROM notebook";//сделать выборку определенного кол-ва символов заметки
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $notes = [];
    while ($data = mysqli_fetch_assoc($result)) $notes[] = $data;
    return $notes;
}

function note_one($link, $id)
{
        $id = $_GET['id'];
        $query = sprintf("SELECT * FROM notebook WHERE id=%d", (int)$id);
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $note_one = [];
        $note_one[] = mysqli_fetch_assoc($result);
        return $note_one;
}

function add_note($link, $title, $note)
{
    if (empty($title) || empty($note)) {
        return false;
    } else {
        $title = mysqli_real_escape_string($link, trim($title));
        $note = mysqli_real_escape_string($link, trim($note));
        $query = sprintf("INSERT INTO notebook (date, title, note) VALUES (NOW(), '%s', '%s')", $title, $note);
        $result = mysqli_query($link, $query ) or die(mysqli_error($link));
        if ($result) {
            return true;
        } else return false;

    }
}


function delete($link, $id)
{
    $query = sprintf("DELETE FROM notebook WHERE id=%d", (int)$id);
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($result) {
        return true;
    } else return false;
}


function edit($link, $id)
{

}
?>