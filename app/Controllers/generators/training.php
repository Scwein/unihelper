<?php 

$title = 'Тренажер';

if(isset($_GET['start'])) {
    $arr1 = createRandomArr($_GET['num1']);
    $arr2 = createRandomArr($_GET['num2']);
    $num1 = arr2num($arr1);
    $num2 = arr2num($arr2);

    $fields = ["num1", "operation", "num2"];
    $data = loadGET($fields);

    
    $_SESSION['num1'] = $data['num1'];
    $_SESSION['operation'] = trim($data['operation'], "2B");
    $_SESSION['num2'] = $data['num2'];

    if ($_SESSION['operation'] == "") {
        $_SESSION['operation'] = '+';
    }

    if ($_SESSION['operation'] == '+') {
        $res = $num1 + $num2;
    }

    if ($_SESSION['operation'] == '-') {
        $res = $num1 - $num2;
    }

    if ($_SESSION['operation'] == '*') {
        $res = $num1 * $num2;
    }

    $_SESSION['res'] = $res;
}

if (isset($_GET['ans'])) {
    if ($_GET['ans'] == $_SESSION['res']) {
        $_SESSION['cnt'] += 1;
        redirect("https://project.local/generators/training?num1={$_SESSION['num1']}&operation={$_SESSION['operation']}2B&num2={$_SESSION['num2']}&start=");
    } else  {
        $fail_msg = true;
        $_SESSION['cnt'] = 0;
    }
}

$view = VIEWS . '/generators/training.blade.php';
require_once VIEWS . '/incs/header.blade.php';