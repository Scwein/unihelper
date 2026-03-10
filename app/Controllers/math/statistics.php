<?php

$title = 'Статистика';

if (isset($_GET['statistic'])) {
    $arr = str2arr((trim($_GET['row'])));
    $arrSort = sort1($arr);
}

$view = VIEWS . '/calculators/statistics.blade.php';
require_once VIEWS . '/incs/header.blade.php';