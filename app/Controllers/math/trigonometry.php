<?php

$title = 'Тригонометрия';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['sin'])) {
        $degree = trim($_POST['sin']);
        $rad = deg2rad($degree);
        $sin = sin($rad);
    }

    if(isset($_POST['cos'])) {
        $degree = trim($_POST['cos']);
        $rad = deg2rad($degree);
        $cos = cos($rad);
    }

    if(isset($_POST['tg'])) {
        $degree = trim($_POST['tg']);
        $rad = deg2rad($degree);
        $tg = tan($rad);
    }

    if(isset($_POST['ctg'])) {
        $degree = trim($_POST['ctg']);
        $rad = deg2rad($degree);
        $ctg = 1 / tan($rad);
    }
}


$view = VIEWS . '/calculators/trigonometry.blade.php';
require_once VIEWS . '/incs/header.blade.php';