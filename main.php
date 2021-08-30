<?php
require('class.php');
$digits = $_POST['digits'];
$answer = new finder;
$answer -> find_dublicate($digits);
if (($answer -> answer) != ''){ 
    echo "У числа <strong> '$answer -> answer' </strong> есть дубликаты!";}
else{
    echo 'Дубликатов нету!';
}
?>