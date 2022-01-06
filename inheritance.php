<?php
// class derives from another class
//inherited class is defined by using the extends keyword.
//It provides reusability of a code. We don’t have to write the same code again and again. Also, it allows us to add more features to a class without modifying it.

//multilevel
//in this program class lamborghini extends Audi class, Audi class extends Nexon class 
//to extend any class class should hve only public protected methods if class have private method so private method can not extend by any other class
class Nexon{
   function Colour(){
      echo "Nexon : Blue";
   }
}
class Audi extends Nexon{
      
}
class lamborghini extends Audi{
   //
}
$obj=new lamborghini();//object
$obj->Colour();
//Types :
//Single inheritance
//Multi-level inheritance
//Multiple inheritance
//Hybrid Inheritance
?>
