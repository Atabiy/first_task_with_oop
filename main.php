<?php
require_once('func.php');
$digits = $_POST['digits'];
$answer = finder($digits);
echo "У числа <strong> '$answer' </strong> есть дубликаты!";
?>