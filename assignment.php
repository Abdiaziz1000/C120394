<!DOCTYPE html>
<html>
<head>
	<title>Assignment Title</title>
</head>
<body>
<center>
<table border="1" width="70%" cellpadding="8">
    <caption><h2>Student Information</h2></caption>
    <tbody>
        <tr>
            <th>Student ID</th>
            <td><?php echo 'C120394'; ?></td>
            <th>Name</th>
            <td><?php echo 'Abdiaziz mohamed Abdi'; ?></td>
        </tr>
        <tr>
            <th>Class</th>
            <td><?php echo 'CA207'; ?></td>
            <th>Department</th>
            <td><?php echo 'Computer Application'; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo 'PHP & MySQL'; ?></td>
            <th>Lecturer</th>
            <td><?php echo 'Bashir Abdinur Ahmed'; ?></td>
        </tr>
    </tbody>
</table>
</center>


<br>

<?php

// Arithmetic Operators
echo "1. all arithmetic operations (+, -, *, /, %) <pre>";
$number1_arith = 10;
$number2_arith = 5;
// Addition
$sum = $number1_arith + $number2_arith;
echo "<pre>Addition: " . $sum . "</pre>";

// Subtraction
$diff = $number1_arith - $number2_arith;
echo "<pre>Subtraction: " . $diff . "</pre>";

// Multiplication
$product = $number1_arith * $number2_arith;
echo "<pre>Multiplication: " . $product . "</pre>";

// Division
$quotient = $number1_arith / $number2_arith;
echo "<pre>Division: " . $quotient . "</pre>";

// Modulo
$remainder = $number1_arith % $number2_arith;
echo "<pre>Modulo: " . $remainder . "</pre>";


// Comparison
echo "2. compares two integer numbers then specifies and prints the greatest one. <pre>";

$number1_comp = 20;
$number2_comp = 7;

if ($number1_comp > $number2_comp) {
    echo "<pre>The greatest number is:  " . $number1_comp . "</pre>";
} elseif ($number2_comp > $number1_comp) {
    echo "<pre>The greatest number is:  " . $number2_comp  . "</pre>";
} else {
    echo "<pre>Both numbers are equal. ";
}


// Comparison of three integer numbers 
echo "3. program that compares three integer numbers then specifies and prints the greatest and smallest one . <pre>";

$number1_comp3 = 10;
$number2_comp3 = 5;
$number3_comp3 = 8;

// Finding the greatest number
$greatest = $number1_comp3;
if ($number2_comp3 > $greatest) {
    $greatest = $number2_comp3;
}
if ($number3_comp3 > $greatest) {
    $greatest = $number3_comp3;
}

// Finding the smallest number
$smallest = $number1_comp3;
if ($number2_comp3 < $smallest) {
    $smallest = $number2_comp3;
}
if ($number3_comp3 < $smallest) {
    $smallest = $number3_comp3;
}

echo "<pre>The greatest number is: " . $greatest . "</pre>";
echo "<pre>The smallest number is: " . $smallest . "</pre>";


// Logical Operators
echo "4. program that prints whether the number is even (divisible by 2) or odd. . <pre>";
$number_even_odd = 10;

if ($number_even_odd % 2 == 0) {
    echo  $number_even_odd  . " is even. <pre>" ;
} else {
    echo $number_even_odd . " is odd.";
}


// Logical Operators

$number_divisible = 15;
echo "5. program that prints whether the number is divisible by 3, 5, both, or none of them. <pre>";
if ($number_divisible % 3 == 0 && $number_divisible % 5 == 0) {
    echo $number_divisible . " is divisible by both 3 and 5.";
} elseif ($number_divisible % 3 == 0) {
    echo $number_divisible . " is divisible by 3.";
} elseif ($number_divisible % 5 == 0) {
    echo $number_divisible . " is divisible by 5.";
} else {
    echo $number_divisible . " is not divisible by 3 or 5.";
}
echo"<br>";


// 6. Print odd numbers from 2 to 20
echo "6. Odd numbers from 2 to 20: ";
for ($i = 3; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br>";

// 7. Print even numbers from 35 to 7
echo "7. Even numbers from 35 to 7: ";
for ($i = 36; $i >= 8; $i -= 2) {
    echo $i . " ";
}
echo "<br>";

// 8. Print numbers divisible by 5 from 1 to 50
echo "8. Numbers divisible by 5 from 1 to 50: ";
for ($i = 5; $i <= 50; $i += 5) {
    echo $i . " ";
}
echo "<br>";

// 9. Print numbers divisible by 2 and 5 from 50 to 2
echo "9. Numbers divisible by 2 and 5 from 50 to 2: ";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
echo "<br>";

// 10. Find the reverse of a given number
$number = 12345;
$reverse = 0;
$temp = $number;

while ($temp > 0) {
    $remainder = $temp % 10;
    $reverse = ($reverse * 10) + $remainder;
    $temp = (int)($temp / 10);
}

echo "10. Reverse of " . $number . " is: " . $reverse;

// 11. Calculate the Lowest Common Multiple (LCM) of two numbers
function calculateLCM($num1, $num2)
{
    $max = max($num1, $num2);
    $lcm = $max;

    while (true) {
        if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
            break;
        }
        $lcm += $max;
    }

    return $lcm;
}

$num1 = 8;
$num2 = 12;
$lcm = calculateLCM($num1, $num2);
echo "11. LCM of " . $num1 . " and " . $num2 . " is: " . $lcm . "<br>";

// 12. Find the common factors of two numbers
function findCommonFactors($num1, $num2)
{
    $factors = [];
    $max = min($num1, $num2);

    for ($i = 1; $i <= $max; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $factors[] = $i;
        }
    }

    return $factors;
}

$num1 = 42;
$num2 = 70;
$commonFactors = findCommonFactors($num1, $num2);
echo "12. Common factors of " . $num1 . " and " . $num2 . " are: " . implode(", ", $commonFactors) . "<br>";

// 13. Calculate the Highest Common Factor (HCF) of two numbers
function calculateHCF($num1, $num2)
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return $num1;
}

$num1 = 18;
$num2 = 24;
$hcf = calculateHCF($num1, $num2);
echo "13. HCF of " . $num1 . " and " . $num2 . " is: " . $hcf . "<br>";

// 14. Calculate the factorial of a number
function calculateFactorial($number)
{
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$number = 5;
$factorial = calculateFactorial($number);
echo "14. Factorial of " . $number . " is: " . $factorial . "<br>";

// 15. Print multiplication table using nested loops
echo "15. Multiplication Table:<br>";
echo "<table>";
echo "<tr><th></th>";

for ($i = 1; $i <= 12; $i++) {
    echo "<th>" . $i . "</th>";
}

echo "</tr>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    echo "<th>" . $i . "</th>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

// 16. Check if a number is prime or non-prime
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    // Check for divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 7;
if (isPrime($number)) {
    echo $number . " is a prime number.<br>";
} else {
    echo $number . " is a non-prime number.<br>";
}

// 17. Print prime numbers from 10 to 50
echo "17. Prime numbers from 10 to 50: ";
for ($i = 10; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";

// 18. Print non-prime numbers from 2 to 25
echo "18. Non-prime numbers from 2 to 25: ";
for ($i = 2; $i <= 25; $i++) {
    if (!isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";

// 19. Print prime numbers from 100 to 6
echo "19. Prime numbers from 100 to 6: ";
for ($i = 100; $i >= 6; $i--) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";

// 20. Print non-prime numbers from 90 to 12
echo "20. Non-prime numbers from 90 to 12: ";
for ($i = 90; $i >= 12; $i--) {
    if (!isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";

// 21. Solve Quadratic Equations
function solveQuadraticEquation($a, $b, $c)
{
    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "The equation has real solutions:<br>x1 = " . $x1 . "<br>x2 = " . $x2;
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "The equation has a single real solution:<br>x = " . $x;
    } else {
        return "The equation has imaginary solutions.";
    }
}

$a = 1;
$b = -5;
$c = 6;
$solutions = solveQuadraticEquation($a, $b, $c);
echo "21. Quadratic Equation: " . $a . "x^2 + " . $b . "x + " . $c . " = 0<br>";
echo $solutions;
?>
</body>
</html>