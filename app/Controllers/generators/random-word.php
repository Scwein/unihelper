<?php

$db = db();

if (isset($_GET["genWord"])) {
    if ($_GET['word'] != '') {
        $db->query("INSERT INTO `words` (`id`, `word`) VALUES (NULL, ?)", [$_GET['word']]);
    }

    if ($db->query('SELECT * FROM words')->findAll() != null) {
        $words = $db->query('SELECT * FROM words')->findAll();
    }
}

if (isset($_GET['genWord2']))
{
    if (($db->query("SELECT * FROM words")->find()) != null){
        $id_min = $db->query('SELECT * FROM words ORDER BY id DESC LIMIT 1')->find()['id'];
        $id_max = $db->query('SELECT * FROM words')->find()['id'];
        $random = rand($id_min, $id_max);
        $word = ($db->query("SELECT * FROM words WHERE id = ?", [$random])->find()['word']);
        $db->query('DELETE FROM words');
    }
}

$view = VIEWS . '/generators/random-word.blade.php';
require_once VIEWS . '/incs/header.blade.php';