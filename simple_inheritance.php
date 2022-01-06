
//simple inheritance 
// only one parent class and only one child class 
<?php
class Nexon{
   function Colour(){
      echo "Nexon : Blue";
   }
}
class Audi extends Nexon{  
}
$obj=new Audi();//object
$obj->Colour();
?>