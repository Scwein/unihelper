<?php

    require_once(CORE . "/meth.php"); 

    if (isset($_GET["MplusM"]))
    {
        for($i = 1; $i <= $_SESSION['a']; $i++)
        {
            for($g = 1; $g <= $_SESSION['b']; $g++)
            {
                $all1[] = $_GET["0{$i}{$g}"];
            }
        }
        $M1 = new matrix_ixj($_SESSION['a'],$_SESSION['b'],$all1);

        for($i = 1; $i <= $_SESSION['c']; $i++)
        {
            for($g = 1; $g <= $_SESSION['d']; $g++)
            {
                $all2[] = $_GET["1{$i}{$g}"];
            }
        }
        $M2 = new matrix_ixj($_SESSION['c'],$_SESSION['d'],$all2);
        printM($_SESSION['a'],$_SESSION['b'],MplusM($M1,$M2));
    }

    if (isset($_GET["MminusM"]))
    {
        for($i = 1; $i <= $_SESSION['a']; $i++)
        {
            for($g = 1; $g <= $_SESSION['b']; $g++)
            {
                $all1[] = $_GET["0{$i}{$g}"];
            }
        }
        $M1 = new matrix_ixj($_SESSION['a'],$_SESSION['b'],$all1);

        for($i = 1; $i <= $_SESSION['c']; $i++)
        {
            for($g = 1; $g <= $_SESSION['d']; $g++)
            {
                $all2[] = $_GET["1{$i}{$g}"];
            }
        }
        $M2 = new matrix_ixj($_SESSION['c'],$_SESSION['d'],$all2);
        printM($_SESSION['a'],$_SESSION['b'],MminusM($M1,$M2));
    }

    if (isset($_GET["MxM"]))
    {
        for($i = 1; $i <= $_SESSION['a']; $i++)
        {
            for($g = 1; $g <= $_SESSION['b']; $g++)
            {
                $all1[] = $_GET["0{$i}{$g}"];
            }
        }
        $M1 = new matrix_ixj($_SESSION['a'],$_SESSION['b'],$all1);

        for($i = 1; $i <= $_SESSION['c']; $i++)
        {
            for($g = 1; $g <= $_SESSION['d']; $g++)
            {
                $all2[] = $_GET["1{$i}{$g}"];
            }
        }
        $M2 = new matrix_ixj($_SESSION['c'],$_SESSION['d'],$all2);
        printM($_SESSION['a'],$_SESSION['d'],MxM($M1,$M2));
    }
?>
