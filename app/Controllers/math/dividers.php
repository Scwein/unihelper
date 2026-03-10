<?php 

if (isset($_GET['divCalc'])) {
    $num = $_GET['div'];
    $divMas = dividers($num);
}

$view = VIEWS . '/calculators/dividers.blade.php';
require_once VIEWS . '/incs/header.blade.php';