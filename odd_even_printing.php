<html>
<body>
<form method="POST">
  Enter Staring number : <input type="number" name="snum"><br><br>
  Enter Ending number : <input type="number" name="enum"><br><br>
  <input type="submit" name="submit">
</form>
</body>
<?php   
if(isset($_POST['submit'])){
$snum = $_POST['snum'];
$enum = $_POST['enum'];
 echo "Even number : ";
  for ($i=$snum; $i <=$enum; $i++) { 
      if(($i % 2) == 0){  
      echo $i; 
      echo " ";
  }
  }
  echo "<br><br>";
  echo "Odd number : ";
  for ($a=$snum; $a <=$enum; $a++) { 
      if(($a % 2) != 0){  
      echo $a; 
      echo " ";
  }
  }
  }
  ?> 