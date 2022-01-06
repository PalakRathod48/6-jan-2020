<html>
<body>
  <form method="POST">
     Enter the Number:<input type="number" name="number" required>
     <input type="submit" name="submit" value="submit" >
  </form>

<?php   
if(isset($_POST['submit'])){ 
$n = $_POST['number'];
for ($i=1; $i<=$n; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo $j." ";	 
}	  	
echo "<br/>";   	
}
}  
?>