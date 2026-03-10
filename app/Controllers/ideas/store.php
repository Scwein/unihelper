<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = db();

    $filable = ['title', 'text'];
    $data = load($filable);

    $db->query('INSERT INTO ideas (title, `text`) VALUES (?, ?)', [h($data['title']), h($data['text'])]);
    redirect('/ideas');
}

require_once VIEWS . '/incs/header.blade.php';