<div class="container-fluid">
    <form action="calt.php" method="get">
        <?php 
            for ($i = 1; $i <= 9; $i++)
            {
                echo "<input name='{$i}' size='3'>";
                if (($i % 3) == 0) echo '<br>';
            }
        ?>
        <br>
        <button class="btn btn-dark" type ="submit" name ="TM">Транспонировать</button>
        <button class="btn btn-dark" type="submit" name ="RM" >Найти обратну матрицу</button>
        <button class="btn btn-dark" type="submit" name ="DET">Найти определитель</button>
        <button class="btn btn-dark" type="submit" name ="^2">Возвести в квадрат</button>
        <button class="btn btn-dark" name="CxM">Умножить на</button>
        <input name="number" value = "1" size="1">
    </form>
</div>
<div class="container-fluid py-2">
    <form action="" method="GET">
        <input  name="num1" size="1">
        x
        <input  name="num2" size="1">
        &#160;&#160;&#160;&#160;
        <input  name="num3" size="1">
        x
        <input  name="num4" size="1">
        <button class="btn btn-dark" type="submit" name="CreateM">Создать матрицы</button>
    </form>
</div>

<?php

if(isset($_GET['CreateM'])) {
    $_SESSION['a'] = $_GET['num1'];
    $_SESSION['b'] = $_GET['num2'];
    $_SESSION['c'] = $_GET['num3'];
    $_SESSION['d'] = $_GET['num4'];

    echo '<div class="container-fluid">';
    echo "<form action='matrix.php'>";
    for($i = 1; $i <= $_GET['num1']; $i++) {
        for($g = 1; $g <= $_GET['num2']; $g++) {
            echo "<input name = '0{$i}{$g}' size='3'>";
        }
        echo '<br>'; 
    }
    echo '<br>';
    for($i = 1; $i <= $_GET['num3']; $i++) {
        for($g = 1; $g <= $_GET['num4']; $g++) {
            echo "<input name = '1{$i}{$g}' size='3'>";
        }
        echo '<br>';
    }
    echo '<br>';
    if (($_GET['num1'] == $_GET['num3']) and ($_GET['num2'] == $_GET['num4'])) {
        echo '<button class="btn btn-dark" name="MplusM">Сложить</button>';
        echo '<button class="btn btn-dark" name="MminusM">Вычесть</button>';
    }

    if ($_GET['num2'] == $_GET['num3']) {
        echo '<button class="btn btn-dark" name="MxM">Умножить</button>';
    }
    echo '</form>';
    echo '</div>';
}
