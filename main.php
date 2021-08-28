<?php
require('func.php');
$digits = $_POST['digits'];
$answer = finder(split($digits));
if ($answer != ''){ 
    echo "У числа <strong> '$answer' </strong> есть дубликаты!";}
else{
    echo 'Дубликатов нету!';
}
?>