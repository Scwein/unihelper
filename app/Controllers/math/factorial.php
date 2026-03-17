<?php

$title = 'Факториал';

if (isset($_GET['equally'])) {
    $num = $_GET['fact'];
    $factorial = factorial($num);
}

$view = VIEWS . '/calculators/factorial.blade.php';
require_once VIEWS . '/incs/header.blade.php';