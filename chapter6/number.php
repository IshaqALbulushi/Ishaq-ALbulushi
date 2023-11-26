<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];


$output=$_POST['12'];
$answer=0.00;

if ($output=="circle"){
    header("Location:circle.php");
    
}
if ($output=="sq"){
    header("Location:sq.php");
}
if ($output=="rectangle"){
    header("Location:rectangle.php");
}
if($output=="triangle") {

    header("Location:triangle.php");
}
echo" the $output of $num1 and $num2 is $answer.<br>";

echo" <button onclick =' history.back() '> back    ";



?>