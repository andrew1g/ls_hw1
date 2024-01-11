<?php

//=====================================================================
echo '<br>';
echo '<b>Задание #1</b>';
echo '<br>';
//Задание #1
$name = 'Андрей';
$age = '41';
//Вариант 1
//echo 'Меня зовут: '. $name;
//echo '<br>';
//Вариант 2
echo '"Меня зовут: '. $name.'"';
echo '<br>';
//Вариант 1
//echo 'Мне '. $age.' год';
//echo '<br>';
//Вариант 2
echo '"Мне '. $age.' год'.'"';
echo '<br>';
// “!|/’”\ (двойная кавычка, воскл. знак, вертикальная черта, слэш, кавычка, двойная кавычка, обратный слэш).
echo " \"!|/'\"\\";
echo '<br>';

//=====================================================================
echo '<br>';
echo '<b>Задание #2</b>';
echo '<br>';
//Задание #2
//На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?
//Описать и вывести условия, решение этой задачи на PHP. Все предоставленные числа из пункта 1 должны быть указаны в константах.
const DRAWINGS = 80; 
const FELT_TIP_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;
//const PAINTS_DRAWINGS;
echo "На школьной выставке ".DRAWINGS." рисунков. ". FELT_TIP_DRAWINGS." из них выполнены фломастерами, ". PENCIL_DRAWINGS." карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?";
echo '<br>';
echo 'Решение:';
echo '<br>';
$PAINTS_DRAWINGS = DRAWINGS - FELT_TIP_DRAWINGS - PENCIL_DRAWINGS;
echo "".DRAWINGS." рисунков - ". FELT_TIP_DRAWINGS." рисунков фломастерами - ". PENCIL_DRAWINGS." рисунков карандашами = " . $PAINTS_DRAWINGS . " рисунков красками.";
echo '<br>';
echo "Рисунков, выполненных красками, на школьной выставке: " . $PAINTS_DRAWINGS;
echo '<br>';

//=====================================================================
echo '<br>';
echo '<b>Задание #3</b>';
echo '<br>';

$age = rand(0, 120);
echo "Ваш возраст: " . $age;
echo '<br>';

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}
echo '<br>';

//=====================================================================
echo '<br>';
echo '<b>Задание #4</b>';
echo '<br>';

$day = rand(0, 10);
echo "День = " . $day;
echo '<br>';

switch ($day) {    
    case 1:
    case 2:    
    case 3:
    case 4:        
    case 5:            
        echo "Это рабочий день";
        break;
    case 6:            
    case 7:                
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
echo '<br>';

//=====================================================================
echo '<br>';
echo '<b>Задание #5</b>';
echo '<br>';

$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);
$toyota = array(
    'model' => 'Supra',
    'speed' => 200,
    'doors' => 2,
    'year' => '2006'
);
$opel = array(
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 4,
    'year' => '2008'
);

$cars = array('bmw'=> $bmw,'toyota'=> $toyota, 'opel'=> $opel);

//Выведите значения всех трех массивов в виде:
//CAR name
//name ­ model ­speed ­ doors ­ year
 foreach ($cars as $key => $value) {
     echo 'CAR ' . $key . '<br>';     
     echo implode(' ', $value)  . '<br>'; 
     echo '<br>';
 }

//echo '<pre>';
//var_dump($cars);
//echo '</pre>';

//=====================================================================
//Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега <table>.
//Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
//Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
//Во всех остальных случаях результат выводить просто числом.
echo '
<html>
<head>
<style>
td, th {        
    vertical-align: middle;
    text-align: center;
    padding: 20px;
    border: 1px solid black;
    border-collapse: collapse;
  }

table {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
</head>
<body> 
';
echo '<br>';
echo '<b>Задание #6</b>';
echo '<br>';
echo '<b>Таблица умножения</b>';
echo '<table>';
echo '<tr>';
 for ($i = 0; $i <= 10; $i++) {    
     if ($i>0) {
         echo '<th><b> '.$i.' </b></th>';
     }
     else {
         echo '<th>*</th>';
     }
 }
 echo '</tr>';

 
for ($i = 1; $i <= 10; $i++) {            
    echo '<tr>';
    echo '<td><b>' . $i . '</b></td>';
    for ($j = 1; $j <= 10; $j++) {                                    
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo '<td>(' . $i * $j . ')</td>';
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo '<td>[' . $i * $j . ']</td>';
        } else {
            echo '<td>' . $i * $j . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
echo '</body>
</html>';



?>


