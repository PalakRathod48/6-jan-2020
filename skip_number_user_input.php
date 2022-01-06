<!DOCTYPE html>
<html>
<body>
<form method="POST">
  Enter Starting number : <input type="number" name="snum"><br><br>
  Enter Ending number : <input type="number" name="enum"><br><br>
  Enter break Number : <input type="number" name="bnum"><br><br>
  <input type="submit" name="submit">
</form>
</body>
</html>
<?php   
if(isset($_POST['submit'])){
$snum = $_POST['snum'];
$enum = $_POST['enum'];
$bnum = $_POST['bnum'];

if ($snum > $enum) {
  echo "Please enter vaild number here, starting is grater than ending number";
}
else{

for ($i=$snum; $i <=$enum ; $i++) { 
  
  if($i%$bnum != 0)
    {
       echo $i;
       echo "<br>";

    }
  
}
}
}
?> 