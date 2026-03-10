<?php

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

// isset($_POST['sin']) ? $_POST['sin] : isset($_POST['cos']) ? $_POST['cos'] : isset($_POST['tg']) ? $POST['tg'] : isset($_POST['ctg']) ? $_POST['ctg'] : '';

$view = VIEWS . '/calculators/trigonometry.blade.php';
require_once VIEWS . '/incs/header.blade.php';