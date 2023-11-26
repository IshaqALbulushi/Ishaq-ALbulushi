<?php
include_once 'shapes.php';


class Circles extends shapes{

//data members
public $pi = 3.1416;
public $radius=0.00;

//method members
public function calculate()
{
   $this->shapeName="circle";
   $this->area=self::$pi* $this->radius* $this->radius;
   $this->perimeter=2*self::$pi*$this->radius;
   $this->showArea();
   $this->showPerimeter();

}

}
if (!empty($_POST['radius'])) {
   $radius2 = $_POST['radius'];
   $area = 3.1416 * $radius2 * $radius2;
   $perimeter12 = 2 * 3.1416 * $radius2;
   echo "Perimeter = {$perimeter12}\n";
   echo "Area = {$area}";
}?>



<html>
<head>
    <title>form1</title>
</head>
<body>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<h1>Circles</h1>


<br>
    Enter the radius: <input type=number name='radius' min=1>
    <br>
    <input type=submit value="submit" >
</form>


</body>
</html>