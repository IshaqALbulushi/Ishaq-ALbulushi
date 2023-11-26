<?php


include_once 'shapes.php';


class rectangle  extends shapes{

//data members
public $length = 0.00;  
public $width =0.00 ;  


//method members
public function calculate()
{
   $this->shapeName="spuare";
   $this->area=$this->length* $this->width;
   $this->perimeter=2*($this->length+$this->width);

   $this->showArea();
   $this->showPerimeter();

}

}
if (!empty($_POST['length']) && !empty($_POST['width'])) {
   $length = $_POST['length'];
   $width = $_POST['width'];
  
   $area= $length* $width ;
   $perimeter=2*($length+ $width);
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

<h1>rectangle</h1>


<br>
   
    <br>
    Enter the length: <input type=number name='length' min=1>

   


<br>
    Enter the width: <input type=number name='width' min=1>

   

<br>
    <input type=submit value="submit" >
</form>


</body>
</html>