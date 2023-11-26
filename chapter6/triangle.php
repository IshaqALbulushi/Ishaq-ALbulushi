<?php


include_once 'shapes.php';


class triangle  extends shapes{

//data members
public $base=0.0;
public $height=0.0;
public $a,$b,$c=0.00 ;

//method members
public function calculate()
{
   $this->shapeName="triangle";
   $this->area= 0.5*$this->base* $this->height;
   $this->perimeter=$this->a +$this->b + $this->c;

   $this->showArea();
   $this->showPerimeter();

}

}
if (!empty($_POST['base']) && !empty($_POST['height']) && !empty($_POST['side1']) && !empty($_POST['side2']) && !empty($_POST['side3'])) {
   $base = $_POST['base'];
   $height = $_POST['height'];
   $side1 = $_POST['side1'];
   $side2 = $_POST['side2'];
   $side3 = $_POST['side3'];
   $area= 0.5* $base*$height;
   $perimeter= $side1+ $side2+ $side3;
   echo "Perimeter = {$perimeter}\n";
   echo "Area = {$area}";
}


?>

<html>
<head>
    <title>triangle</title>
</head>
<body>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<h1>triangle</h1>


<br>
    Enter the height: <input type=number name='height' min=1>
    <br>
    Enter the base: <input type=number name='base' min=1>

    <br>
    
    Enter the side1: <input type=number name='side1' min=1>

<br>
Enter the side2: <input type=number name='side2' min=1>

<br>
Enter the side3: <input type=number name='side3' min=1>

<br>
    <input type=submit value="submit" >
</form>


</body>
</html>