<?php
$binaryArray = [];
$number = 134;

while ($number > 0) {
    $binary = $number % 2;
    $number = floor($number / 2);
    array_unshift($binaryArray, $binary);
}

echo implode($binaryArray);

