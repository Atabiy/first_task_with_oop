<?php
require('class.php');
$digits = $_POST['digits'];
$answer = new finder;
$answer -> find_dublicate($digits);
$a = $answer -> answer;
echo $a
/*if (($answer -> answer) != ''){ 
    echo "У числа <strong> '$answer -> answer' </strong> есть дубликаты!";}
else{
    echo 'Дубликатов нету!';
}*/
?>