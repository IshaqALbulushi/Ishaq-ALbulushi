<?php
$num1 = 10;
$num2 = 5;
addnumbers($num1, $num2);
subtractNumbers($num1,$num2);
multiplyNumbers($num1,$num2);
divideNumbers($num1,$num2);


function addnumbers($num1,$num2)
{
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is $sum<br>";
}

function subtractNumbers($num1,$num2)
{
$diff = $num1 - $num2;
echo "The differance of $num1 and $num2 is $diff<br>";
}

function multiplyNumbers($num1,$num2)
{
$prod = $num1 * $num2;
echo "The product of $num1 and $num2 is $prod<br>";
}

function divideNumbers($num1,$num2)
{
$quotient = $num1 / $num2;
echo "The quotient of $num1 and $num2 is $quotient<br>";
}


?>