<?php 

$title = 'Процент';

if (isset($_GET['equally'])) {
    $num = $_GET['num'];
    $percent = $_GET['percent'];
    $percent = getPercent($num, $percent);
}

$view = VIEWS . '/calculators/percent.blade.php';
require_once VIEWS . '/incs/header.blade.php';