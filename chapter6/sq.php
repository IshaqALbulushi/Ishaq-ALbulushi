<?php


include_once 'shapes.php';


class sq  extends shapes{

//data members
public $base=0.0;



//method members
public function calculate()
{
   $this->shapeName="spuare";
   $this->area=$this->base* $this->base;
   $this->perimeter=$this->base *4;

   $this->showArea();
   $this->showPerimeter();

}

}

if (!empty($_POST['base'])) {
   $base = $_POST['base'];
   
   $area=  $base*$base;
   $perimeter= $base*4;
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

<h1>square</h1>


<br>
   
    <br>
    Enter the base: <input type=number name='base' min=1>

   

<br>
    <input type=submit value="submit" >
</form>


</body>
</html>