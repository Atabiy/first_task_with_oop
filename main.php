<?php
require('class.php');
$digits = $_POST['digits'];
$answer = new finder;
echo $answer -> $string_from_form;
$answer -> find_dublicate($digits);
if (($answer -> answer) != ''){ 
    echo "У числа <strong>'".$answer -> answer."'</strong> есть дубликаты!";}
else{
    echo 'Дубликатов нету!';
}
?>