<?php
//задание 1
$name = 'Паша';
$age = 47;
    echo "Меня зовут - $name.";
    echo '<br />';
    echo "Мне - $age лет.";
    echo '<br />============='; //разделитель заданий
    echo '<br />';
    echo "\"<br />!<br />|<br />\<br />\<br />/<br />'<br />\"<br />\\"; //!!!если правильно понял, то символы тоже с новой строки.
    echo '<br />';
    echo '=============<br />';
//задание 2
const DRAWINGS = 80;
const PENCILS = 40;
const FLASHERS = 23;
$paints = DRAWINGS - PENCILS - FLASHERS;
    echo $paints;
    echo '<br />=============<br />';
//задание 3
$age = 47;
if (($age >= 1) && ($age <= 17))
{
    echo 'Вам еще рано работать';
} 
elseif (($age >= 18) && ($age <= 65)) 
{
    echo 'Вам еще работать и работать';
} 
elseif ($age > 65) 
{
    echo 'Вам пора на пенсию';
} 
else 
{
    echo 'Неопределённый возраст';
}
echo '<br />=============<br />';   
//задание 4
$day = 3;
switch ($day) 
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        echo '<br />=============<br />';
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        echo '<br />=============<br />';
        break;
    default:
        echo "Несуществующий день";
        echo '<br />=============<br />';
}
//задание 5
$bmw = [
    "model"=>"X5", 
    "speed"=>120, 
    "doors"=>5, 
    "year"=>"2015"];

$toyota = [
    "model"=>"4Runner", 
    "speed"=>140, 
    "doors"=>5, 
    "year"=>"2012"];

$opel = [
    "model"=>"Insignia", 
    "speed"=>170, 
    "doors"=>5, 
    "year"=>"20014"];

    echo 'BMW - '.$bmw["model"].' - '.$bmw["speed"].' - '.$bmw["doors"].' - '.$bmw["year"].'<br />';
    echo 'Toyota - '.$toyota["model"].' - '.$toyota["speed"].' - '.$toyota["doors"].' - '.$toyota["year"].'<br />';
    echo 'Opel - '.$opel["model"].' - '.$opel["speed"].' - '.$opel["doors"].' - '.$opel["year"].'';
    echo '<br />=============<br />';
//задание 6
echo '<table>';
for ($i = 1; $i <= 10; $i++) 
{
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) 
    {
        if (($i % 2 == 0) && ($j % 2 == 0)) 
            {
                $chet = true;
            } 
            elseif (($i % 2 == 1) && ($j % 2 == 1)) 
                {
                    $nechet = true;
                } 
                else 
                {
                    $chet = false;
                    $nechet = false;
                }
        echo '<td>';
        if ($chet == true) 
            {
                echo '(';
            } 
        elseif ($nechet == true) 
            {
                echo '[';
            }
        echo $i * $j;
        if ($chet == true) 
            {
                echo ')';
            } 
        elseif ($nechet == true) 
            {
                echo ']';
            }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
