<?php

require_once(CORE . '/meth.php');
require_once(CORE . '/funcs.php');

    $a11 = $_GET["1"];
    $a12 = $_GET["2"];
    $a13 = $_GET["3"];
    $a21 = $_GET["4"];
    $a22 = $_GET["5"];
    $a23 = $_GET["6"];
    $a31 = $_GET["7"];
    $a32 = $_GET["8"];
    $a33 = $_GET["9"];
    
    if (isset($_GET["TM"])) {
        printM(3,3,TM(new matrix_ixj(3,3,[$a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33])));
    }

    if (isset($_GET["RM"])) {
        printM(3, 3, reverseM(new matrix_3x3($a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33)));
    }

    if (isset($_GET['DET'])) {
        $a = new matrix_3x3($a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33);
        echo $a -> det();
    }

    if (isset($_GET["^2"])) {
        printM(3,3,MxM(new matrix_ixj(3,3, [$a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33]),new matrix_ixj(3,3, [$a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33])));
    }
    if (isset($_GET['CxM'])) {
        printM(3,3,MxC($_GET["number"],new matrix_3x3($a11, $a12, $a13, $a21, $a22, $a23, $a31, $a32, $a33)));
    }

?>

<?php
    if (isset($_GET['createM'])) {
        echo '<form action="#">';
            for($i = 1; $i <= $_GET['num']; $i++)
            {
                for($g = 1; $g <= $_GET['num2']; $g++)
                {
                    echo '<input>';
                }
                echo '<br>';
            }
        echo '</form>';
        echo 1;
    }
?>

<br></br>