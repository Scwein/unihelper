<?php

$title = 'Калькулятор';

$db = db();

$calculations = $db->query("SELECT * FROM calculations ORDER BY id DESC LIMIT 5")->findAll();

if(isset($_GET['equally'])) {
    eval("\$res = {$_GET["summand1"]} {$_GET["operation"]} {$_GET["summand2"]};");
    
    $db->
    query("INSERT INTO `calculations` (`num1`, `operation`, `num2`, `result`) VALUES (?, ?, ?, ?)", [$_GET["summand1"], $_GET["operation"], $_GET["summand2"], $res]);
}

if (isset($_GET['close'])) {
    redirect("https://unihelper.local/math/calculator");
}

$view = VIEWS . '/calculators/calculator.blade.php';
require_once VIEWS . '/incs/header.blade.php';