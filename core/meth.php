<?php 

function factorial(int $n)
{
    if ($n < 0) return;
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}

class matrix_2x2
{
    public int $i = 2;
    public int $j = 2;
    public array $matrix;

    public function __construct(int|float $a11, int|float $a12, int|float $a21, int|float $a22)
    {
        $matrix = ['11' => $a11, '12' => $a12,
                   '21' => $a21, '22' => $a22];
        return $this -> matrix = $matrix;
    }

    public function det(array $SomeMatrix_2x2): int|float
    {
        $det = $SomeMatrix_2x2['11'] * $SomeMatrix_2x2['22'] - $SomeMatrix_2x2['12'] * $SomeMatrix_2x2['21'];
        return $det;
    }
    public function printMatrix():void
    {
        echo <<<END
        ({$this -> matrix['11']} {$this -> matrix['12']})<br></br>
        ({$this -> matrix['21']} {$this -> matrix['22']})
        END;
    }
}

class matrix_3x3
{
    public int $i = 3;
    public int $j = 3;
    public array $matrix;

    public function __construct(int|float $a11, int|float $a12, int|float $a13, int|float $a21, int|float $a22, int|float $a23, int|float $a31, int|float $a32, int|float $a33)
    {
        $matrix = ['11' => $a11, '12' => $a12, '13' => $a13,
                   '21' => $a21, '22' => $a22, '23' => $a23,
                   '31' => $a31, '32' => $a32, '33' => $a33];
        return $this -> matrix = $matrix;
    }
    public function det(): int|float
    {
        $det_1 = $this -> matrix['11'] * $this -> matrix['22'] * $this -> matrix['33'];
        $det_2 = $this -> matrix['12'] * $this -> matrix['23'] * $this -> matrix['31'];
        $det_3 = $this -> matrix['13'] * $this -> matrix['21'] * $this -> matrix['32'];
        $det_4 = $this -> matrix['13'] * $this -> matrix['22'] * $this -> matrix['31'];
        $det_5 = $this -> matrix['12'] * $this -> matrix['21'] * $this -> matrix['33'];
        $det_6 = $this -> matrix['11'] * $this -> matrix['23'] * $this -> matrix['32'];
        $det = $det_1 + $det_2 + $det_3 - $det_4 - $det_5 - $det_6;
        return $det;
    }
    public function printMatrix():void
    {
        echo <<<END
        ({$this -> matrix['11']} {$this -> matrix['12']} {$this -> matrix['13']})<br></br>
        ({$this -> matrix['21']} {$this -> matrix['22']} {$this -> matrix['23']})<br></br>
        ({$this -> matrix['31']} {$this -> matrix['32']} {$this -> matrix['33']})<br></br>
        END;
    }
}

class matrix_ixj
{
    public $i;
    public $j;
    public array $matrix;

    public function __construct(int $i,int $j, array $a) # i-строка, j-столбец a - значения матрицы
    {
        if (count($a) == $i * $j)
        {
            $u = 0;
            for ($t = 1 ;$t <= $i; $t++)
            {
                for ($d = 1 ;$d <= $j; $d++)
                {
                    $SUBmatrix["{$t}{$d}"] = $a[$u++];
                }
            }
            $this -> matrix = $SUBmatrix;
            $this -> i = $i;
            $this -> j = $j;
        }
        else echo '<p>'.'ОШИБКА!!! Заполните всю матрицу!'.'</p>';
    }

    public function printMatrix(): void
    {
        for ($t = 1 ;$t <= $this -> i; $t++)
        {
            echo '( ';
            for ($d = 1 ;$d <= $this -> j; $d++)
            {
                echo $this -> matrix["{$t}{$d}"].PHP_EOL;
            }
            echo ')';
            echo '<br></br>';
        }
    }
}

function MxM_2x2(matrix_2x2 $matrix, matrix_2x2 $anotherMatrix): array
{
    $MainMatrix = [];
    $MainMatrix['11'] = $matrix -> matrix['11'] * $anotherMatrix -> matrix['11'] + $matrix -> matrix['12'] * $anotherMatrix -> matrix['21'];
    $MainMatrix['12'] = $matrix -> matrix['11'] * $anotherMatrix -> matrix['12'] + $matrix -> matrix['12'] * $anotherMatrix -> matrix['22'];
    $MainMatrix['21'] = $matrix -> matrix['21'] * $anotherMatrix -> matrix['11'] + $matrix -> matrix['22'] * $anotherMatrix -> matrix['21'];
    $MainMatrix['22'] = $matrix -> matrix['21'] * $anotherMatrix -> matrix['12'] + $matrix -> matrix['22'] * $anotherMatrix -> matrix['22'];
    return $MainMatrix;
}

function printM(int $i,int $j,array $matrix): void
{
    for ($t = 1 ;$t <= $i; $t++)
    {
        echo '( ';
        for ($d = 1 ;$d <= $j; $d++)
        {
            echo $matrix["{$t}{$d}"].PHP_EOL;
        }
        echo ')';
        echo '<br></br>';
    }   
}

function MxM(matrix_ixj $M1,matrix_ixj $M2, $res = []): array
{
    for($i = 1; $i <= $M1 -> i; $i++)
    {
        for($j = 1; $j <= $M2 -> j; $j++)
        {
            for($k = 1; $k <= $M1 -> j;$k++)
            {
                @$res["{$i}{$j}"] += $M1 -> matrix["{$i}{$k}"] * $M2 -> matrix["{$k}{$j}"];
            }
        }
    }
    return $res;
}

function TM(matrix_ixj $something): array
{
    for ($t = 1 ;$t <= $something -> i; $t++)
    {
        for ($d = 1 ;$d <= $something -> j; $d++)
            {
                $SUBmatrix["{$d}{$t}"] = $something -> matrix["{$t}{$d}"];
                
            }
    }
    return $SUBmatrix;
}

function MplusM(matrix_ixj $M1,matrix_ixj $M2, $res = []): array
{
    for($g = 1; $g <= $M1 -> i; $g++)
    {
        for($h = 1; $h <= $M1 -> j; $h++)
        {
            $res["{$g}{$h}"] = $M1 -> matrix["{$g}{$h}"] + $M2 -> matrix["{$g}{$h}"];
        }
    }
    return $res;
}

function MminusM(matrix_ixj $M1,matrix_ixj $M2, $res = []): array
{
    for($g = 1; $g <= $M1 -> i; $g++)
    {
        for($h = 1; $h <= $M1 -> j; $h++)
        {
            $res["{$g}{$h}"] = $M1 -> matrix["{$g}{$h}"] - $M2 -> matrix["{$g}{$h}"];
        }
    }
    return $res;
}

function MxC(int|float $x, matrix_ixj|matrix_3x3 $M1):array
{
    for($g = 1; $g <= $M1 -> i; $g++)
    {
        for($h = 1; $h <= $M1 -> j; $h++)
        {
            $res["{$g}{$h}"] = $M1 -> matrix["{$g}{$h}"] * $x;
        }
    }
    return $res;
}

function reverseM(matrix_3x3 $M1): array
{
    $det = $M1 -> det($M1 -> matrix);

    $b = 1/$det;

    $A11 = $M1 -> matrix['22'] * $M1 -> matrix['33'] - $M1 -> matrix['23'] * $M1 -> matrix['32'];
    $A12 = -1 *($M1 -> matrix['21'] * $M1 -> matrix['33'] - $M1 -> matrix['23'] * $M1 -> matrix['31']);
    $A13 = $M1 -> matrix['21'] * $M1 -> matrix['32'] - $M1 -> matrix['22'] * $M1 -> matrix['31'];
    $A21 = -1 * ($M1 -> matrix['12'] * $M1 -> matrix['33'] - $M1 -> matrix['13'] * $M1 -> matrix['32']);
    $A22 = $M1 -> matrix['11'] * $M1 -> matrix['33'] - $M1 -> matrix['13'] * $M1 -> matrix['31'];
    $A23 = -1 *($M1 -> matrix['11'] * $M1 -> matrix['32'] - $M1 -> matrix['12'] * $M1 -> matrix['31']);
    $A31 = $M1 -> matrix['12'] * $M1 -> matrix['23'] - $M1 -> matrix['13'] * $M1 -> matrix['22'];
    $A32 = -1 * ($M1 -> matrix['11'] * $M1 -> matrix['23'] - $M1 -> matrix['13'] * $M1 -> matrix['21']);
    $A33 = $M1 -> matrix['11'] * $M1 -> matrix['22'] - $M1 -> matrix['12'] * $M1 -> matrix['21'];

    $M1 -> matrix = ['11' => $A11, '12' => $A21, '13' => $A31,
                     '21' => $A12, '22' => $A22, '23' => $A32,
                     '31' => $A13, '32' => $A23, '33' => $A33];

    $res1  = MxC($b,$M1);
    
    return $res1; 
}

function ItemDropChance(int|float $res, int $quantity): int|float
{
    return (1-(1-$res/100)**$quantity)*100;
}

function dividers(int $SomeNum)
{
    if ($SomeNum > 0)
    {
        if ($SomeNum != 1)
        {
            for ($i = 1; $i < $SomeNum; $i++)
            {
                if (($SomeNum % $i) == 0)
                {
                    $res[0][] = $i;
                }
            }
            $res[] = array_sum($res[0]);
            $res[] = count($res[0]);
            return $res;
        }
        elseif ($SomeNum = 1)
        {
            $res[0][] = 1;
            $res[] = array_sum($res[0]);
            $res[] = count($res[0]);
            return $res;
        }
    }
}

function sort1(array $SomeArray): array
{
    for($k = 0; $k < count($SomeArray); $k++)
    {
        for($i = 0; $i < count($SomeArray) - 1; $i++)
        {
            if ($SomeArray[$i] > $SomeArray[$i + 1])
            {
                $temp = $SomeArray[$i];
                $SomeArray[$i] = $SomeArray[$i + 1];
                $SomeArray[$i + 1] = $temp;
            }
        }
    }
    return $SomeArray;
}

function mediana(array $SomeArray)
{
    $SomeArray = sort1($SomeArray);
    if (count($SomeArray) % 2 == 0)
    {

        $mediana = ($SomeArray[count($SomeArray) / 2 - 1] + $SomeArray[count($SomeArray) / 2]) / 2;
    }
    else
        $mediana = $SomeArray[round(count($SomeArray) / 2) - 1];
    return $mediana;
}

function avg_value(array $SomeArray)
{
    $avg_value = array_sum($SomeArray) / count($SomeArray);
    return $avg_value;
}

function standard_deviation(array $SomeArray)
{
    $a = 0;
    $D = 0;
    for($i = 0; $i < count($SomeArray); $i++)
    {
        $a = ($SomeArray[$i] - avg_value($SomeArray))**2;
        $D += $a;
    }
    $D /= count($SomeArray) - 1;
    $sigma = sqrt($D);
    return $sigma;
}

function variance(array $SomeArray)
{
    $a = 0;
    $D = 0;
    for($i = 0; $i < count($SomeArray); $i++)
    {
        $a = ($SomeArray[$i] - avg_value($SomeArray))**2;
        $D += $a;
    }
    $D /= count($SomeArray) - 1;
    return $D;
}


function getPercent(int|float $num, int|float $percent)
{
    $res = $num * ($percent / 100);
    return $res;
}

function fibonachi(int $quantity, int $num1, int $num2): array
{
    $res = [$num1, $num2];
    for ($i = 1; $i <= $quantity; $i++)
    {
        $res[] = $res[$i - 1] + $res[$i];   
    }
    return $res;
}

function binary_search(array $array, int|float $value): ?int
{
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2);
        $guess = $array[$mid];
        if ($guess == $value) {
            return $mid;
        }
        if ($guess > $value) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}

function findMinIndex(array $array): int
{
    $minIndex = 0;
    $min = PHP_INT_MAX;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $minIndex = $i;
            $min = $array[$i];
        }
    }
    return $minIndex;
}

function selection_sort(array $array): array
{
    $res = [];
    foreach ($array as $v) {
        $res[] = $array[findMinIndex($array)];
        unset($array[findMinIndex($array)]);
        $array = array_values($array);
    }
    return $res;
}

function quicksort($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $less = [];
    $greater = [];
    $pivot = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $less[] = $array[$i];
        } else {
            $greater[] = $array[$i];
        }
    }
    return array_merge(quickSort($less), [$pivot], quickSort($greater));
}