<html>
<body>
  <form method="POST">
     Enter the Number:<input type="number" name="number" required>
     <input type="submit" name="submit" value="submit" >
  </form>

<?php   
if(isset($_POST["submit"])){ 
$n = $_POST["number"];
for($i=0; $i<$n; $i++) {
for($j=0; $j<$n; $j++)
{
echo "* ";
}
echo "<br>";
}
}
?>