<?php

//1. Write a PHP script to calculate the simple interest.
//Hints: Simple Interest = (Principal × Rate × Time) / 100

//$principal = readline("Principal: ");
//$rate = readline("Rate: ");
//$time = readline("Time: ");

echo "<h3> 1. Simple Interest math </h3>";

$principal = 12;
$rate = 0.12;
$time = 2;

$simple_interest = ($principal * $rate * $time) / 100;

echo "Simple Interest: $simple_interest <br>";

//2. Write a PHP script to swap two numbers without using a third variable.

echo "<h3> 2. Swap two numbers </h3>";

$num1 = 20;
$num2 = 30;

echo "<h5> Before swapping: </h5>";

echo "Number 01: $num1 <br>";
echo "Number 02: $num2 <br>";

$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "<h5> After swapping: </h5>";

echo "Swapped number 01: $num1 <br>";
echo "Swapped number 02: $num2 <br>";

//3. Write a PHP script to check whether a given year is a leap year or not.
//Hints: A year is a leap year if it is divisible by 4, but not divisible by 100, unless it is also divisible by 400.

echo "<h3> 3. Checking leap year </h3>";

$year = 2030;

echo "Year: $year <br>";

if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
    echo "The year $year is a leap year.";
}else{
    echo "The year $year is not a leap year.";
}

//Write a PHP script to find the factorial of a number.
//Hints: Use loop (for/while).

echo "<h3> 4. Find factorial of a number </h3>";

$number = 7;
$factorial = 1;

echo "Number: $number <br>";

for($i = 1; $i <= $number; $i++){
    $factorial *= $i;
}

echo "The factorial of $number is: $factorial <br>";

//5. Write a PHP script to print all the prime numbers between 1 to 50.

echo "<h3> 5. Print prime numbers </h3>";

for($num = 2; $num <= 50; $num++){
    $isPrime = true;

    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }

    if($isPrime){
        echo $num." ";
    }
}

//6. Write a PHP script to print the following patterns using nested loops:
echo "<h3>Print Patterns</h3>";

echo "<h5>Pattern 1</h5>";

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<h5>Pattern 2</h5>";

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<h5>Pattern 3</h5>";

$letter = 'A';
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letter . " ";
    }
    $letter++;
    echo "<br>";
}

?>