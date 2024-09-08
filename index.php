<?php
$c = 4.5;
$d = (int) $c;
echo '$c: ' . "\$c\t\tкурс\"\n";
$page_name = "PHP tutorial";
$str = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$page_name</title>
</head>
<body>
<h1>$page_name</h1>
EOD;

echo $str;

$sum = $c + $d;
echo $sum."\n";



echo "<div style='width: 100px; height: 100px; background: red; border-radius: 50%;'></div>";