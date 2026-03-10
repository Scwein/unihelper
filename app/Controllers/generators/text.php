<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = $_POST['text'];
    $words = count(explode(' ', $text));
    $sentences = count(explode('.', $text)) - 1;
    $sentences += count(explode('!', $text)) - 1;
    $sentences += count(explode('?', $text)) - 1;
    $text = str_replace(',', '', $text);
    $text = str_replace('.', '', $text);
    $text = str_replace('!', '', $text);
    $text = str_replace('?', '', $text);
    $text = str_replace(' ', '', $text);
    $symbols = mb_strlen($text);
}


$view =  VIEWS . '/generators/text.blade.php';
require_once VIEWS . '/incs/header.blade.php';