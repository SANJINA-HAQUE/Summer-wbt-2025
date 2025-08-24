<?php

//1. area and parameter of a ractangle

echo "<h3> 1. Area and Parameter of a Ractangle </h3>";

$length = 10;
$width = 6;

$area = $length * $width;
$parameter = 2 * ($length + $width);

echo "Area: $area <br>";
echo "Parameter: $parameter <br>";


//2. calculate the VAT

echo "<h3> 2. Calculate the VAT </h3>";

$amount = 1000;

$VAT = 0.15 * $amount;

echo "VAT: $VAT <br>";

//3. check odd-even

echo "<h3> 3. Check Odd-Even </h3>";

$number = 10;

if($number % 2 == 0){
    echo "The number $number is even. <br>";
}else{
    echo "The number $number is odd. <br>";
}

// 4. Find largest number

echo "<h3> 4. Find the largest number from three numbers </h3>";

$num0 = 23;
$num1 = 21;
$num2 = 73;

if($num0>$num1 && $num0>$num2){
    echo "The largest number is $num0. <br>";
}else if($num1>$num0 && $num1>$num2){
    echo "The largest number is $num1. <br>";
}else{
    echo "The largest number is $num2. <br>";
}

//5. Print all odd numbers.

echo "<h3> 5. Print all odd numbers from 10 to 100 </h3>";

for($i = 10; $i<=100; $i++){
    if($i % 2 != 0){
        echo "$i <br>";
    }
}

//6. search an element from array

echo "<h3> 6. Search an element from array </h3>";

$array = [2, 9, 12, 3, 29];
$search = 12;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in the array<br>";
} else {
    echo "$search not found in the array<br>";
}

//7. shapes

echo "<h3> 7. Print shapes </h3>";

echo "<table border='1' cellpadding='20'>
<tr>
<td><pre>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "</pre></td>";

echo "<td><pre>";
$numbers = [
    [1, 2, 3],
    [1, 2],
    [1]
];
foreach ($numbers as $row) {
    foreach ($row as $num) {
        echo $num . " ";
    }
    echo "<br>";
}
echo "</pre></td>";

echo "<td><pre>";

$letters = ['A','B','C','D','E','F'];
$rows = [
    ['A'],
    ['B','C'],
    ['D','E','F']
];
foreach ($rows as $row) {
    foreach ($row as $letter) {
        echo $letter . " ";
    }
    echo "<br>";
}
echo "</pre></td>
</tr>
</table>";

?>