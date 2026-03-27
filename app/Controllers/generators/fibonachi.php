<?php

if (isset($_GET['start']))  {
    $data = [
        'quantity' => $_GET['quantity'],
        'num1' => $_GET['num1'],
        'num2' => $_GET['num2'],
    ];

    $fibonachi = fibonachi($data["quantity"], $data["num1"], $data["num2"]);
}

$view = VIEWS . '/generators/fibonachi.blade.php';
require_once VIEWS . '/incs/header.blade.php';