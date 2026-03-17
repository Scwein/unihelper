<?php 

$title = 'Процент выпадения';

if (isset($_GET['equally'])) {
    $percent = $_GET['num1'];
    $quantity = $_GET['num2'];
    $chance = ItemDropChance($percent, $quantity);
}

$view = VIEWS . '/calculators/itemDropChance.blade.php';
require_once VIEWS . '/incs/header.blade.php';
