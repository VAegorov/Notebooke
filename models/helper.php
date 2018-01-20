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

function note_one($link)
{
    if (!isset($_GET['id'])) {
        return false;
    } else {
        $id = $_GET['id'];
        $query = sprintf("SELECT * FROM notebook WHERE id=%d", (int)$id);
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $note_one = [];
        $note_one[] = mysqli_fetch_assoc($result);
        return $note_one;
    }

}