<?php

class Shapes
{
    //data members
    protected $shapeName="";
    protected $area=0.00;
  
    protected $perimeter=0.00;
 
    //method members
    protected function showArea()
    {
        echo "The area of ". $this->shapeName ." is ". $this->area ."<br>";

    }

    protected function showPerimeter()
    {
        echo "The perimeter of " .$this->shapeName ." is ". $this ->perimeter ."<br>";


    }


    




}
?>