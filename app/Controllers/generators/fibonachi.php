<?php

if (isset($_GET['start']))  {
    $filable = ["quantity", "num1", "num2"];
    $data = loadGET($filable);

    $fibonachi = fibonachi($data["quantity"], $data["num1"], $data["num2"]);
}


$view = VIEWS . '/generators/fibonachi.blade.php';
require_once VIEWS . '/incs/header.blade.php';