<?php

if (isset($_GET["genNum"])) {
    $num = rand($_GET["min"], $_GET["max"]);
}

$view = VIEWS . '/generators/random-int.blade.php';
require_once VIEWS . '/incs/header.blade.php';