<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];


$output=$_POST['output'];
$answer=0.00;

if ($output=="sum"){
    $answer=$num1+$num2;

    
}
elseif ($output=="difference"){
    $answer= $num1 - $num2;
}
elseif ($output=="product"){
    $answer=$num1 * $num2;
}
else {
    $answer=$num1 / $num2;
}
echo" the $output of $num1 and $num2 is $answer.<br>";

echo" <button onclick =' history.back() '> back    ";



?>