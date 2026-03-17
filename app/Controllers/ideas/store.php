<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = db();

    $data = [$_POST['title'], $_POST['text']];
    $data = array_map('trim', $data);
    $data = array_map('h', $data);

    $db->query('INSERT INTO ideas (title, `text`) VALUES (?, ?)', [$data[0], $data[1]]);
    redirect('/ideas');
}

require_once VIEWS . '/incs/header.blade.php';