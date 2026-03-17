<?php

/** @var Db $db */

$title = 'Изменить идею';

$db = db();

$id = $_POST['id'] ?? 0;

$title_idea = $db->query('SELECT * FROM ideas WHERE id = ?', [$id])->find()['title'];
$text_idea = $db->query('SELECT * FROM ideas WHERE id = ?', [$id])->find()['text'];

$view = VIEWS . '/ideas/update.blade.php';
require_once VIEWS . '/incs/header.blade.php';