<?php

function array_dump(array $SomeArray): void
{
    for($i = 0; $i < count($SomeArray); $i++)
    {
        echo $SomeArray[$i], ' ';
    }
}

function str2arr(string $string)
{
    $arr = explode(' ', $string);
    return $arr;
}

function abort($code = 404)
{
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}.blade.php";
    die();
}

function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    dump($data);
    die();
}

function createRandomArr(int $num)
{
    $random1 = [];
    for ($i = 0; $i < $num; $i++)
    {
        $random1[] = rand(1, 9);
    }
    return $random1;
}

function arr2num(array $arr)
{   
    $num = '';
    for ($i = 0; $i < count($arr); $i++)
    {
        $num .= $arr[$i];
    }
    return (int) $num;
}

function old(string $fieldname, $value = '', string $flag = 'GET')
{
    if ($flag == 'GET')
    {
        return isset($_GET[$fieldname]) ? h($_GET[$fieldname]) : $value;
    }
    elseif ($flag == 'POST')
    {
        return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : $value;
    }
    else 
    {
        throw new Exception("Not found allowed flag");
    }
    
}

function h(string $string)
{
    return htmlspecialchars($string, ENT_QUOTES);
}

function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("location: {$redirect}");
    die();
}

function load(array $fieldname = [])
{
    $data = [];
    foreach ($_POST as $k => $v)
    {
        if ((in_array($k, $fieldname))) {
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function loadGET(array $fieldname = [])
{
    $data = [];
    foreach ($_GET as $k => $v)
    {
        if ((in_array($k, $fieldname))) {
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function print_num(int $num1, int $num2)
{
    $qntity1 = strlen("{$num1}");
    $qntity2 = strlen("{$num2}");
    $dif = $qntity1 - $qntity2;

    if ($qntity1 > $qntity2)
    {
        echo $num1 . '<br>';
        for ($i = 0; $i <= ($dif - 1); $i++)
        {
            echo '&ensp;';  
        }
        echo $num2;
    }

    if ($qntity1 == $qntity2)
    {
        echo $num1 . '<br>';
        echo $num2;  
    }

    if ($qntity1 < $qntity2)
    {
        for ($i = 0; $i <= (abs($dif) - 1); $i++)
        {
            echo '&ensp;';
        }
        echo $num1 . '<br>';
        echo $num2;  
    }
}

function outputIdea(string $title, string $text, int $id)
{
    echo "<h3>$title<br></h3>";
    echo $text . '<br>';
    echo '<form action="/ideas" method="POST">';
    echo "<input type='hidden' name='_method' value='DELETE1'>";
    echo "<input type='hidden' name='id' value={$id}>";
    echo '<button type="submit" name="delete">Удалить</button>';
    echo '</form>';
    echo '<form action="/ideas" method="POST">';
    echo "<input type='hidden' name='_method' value='PATCH'>";
    echo "<input type='hidden' name='id' value={$id}>";
    echo "<button type=submit name=patch>Изменить</button>";
    echo '</form>';
    echo '<hr>';
}

function db(): Db
{
    return App::get(Db::class);
}

function day_of_weak(string $day_of_weak): string
{
    $days = [
        'Monday' => 'Понедельник',
        'Tuesday' => 'Вторник',
        'Wednesday' => 'Среда',
        'Thursday' => 'Четверг',
        'Friday' => 'Пятница',
        'Saturday' => 'Суббота',
        'Sunday' => 'Воскресенье',
    ];
    $day = $days[$day_of_weak];
    return $day;
}

function month(string $num): string
{
    $months = [
        '01' => 'января',
        '02' => 'февраля',
        '03' => 'марта',
        '04' => 'апреля',
        '05' => 'мая',
        '06' => 'июня',
        '07' => 'июля',
        '08' => 'августа',
        '09' => 'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря',
    ];
    $month = $months[$num];
    return $month;
}

function day_or_night(string|int $hour): void
{
    if($hour >= 6 && $hour < 18) {
        echo '<i class="fa-solid fa-sun"></i>';
    } else {
        echo '<i class="fa-solid fa-moon"></i>';
    }
}

