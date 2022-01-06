<html>
<head>
	<title>Concept of class and object</title>
</head>
<body>
<form method="POST">
	Enter Your car number : <input type="text" name="number">
	Enter your car colour : <input type="text" name="colour">
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php 
//class concept
 if(isset($_POST['submit'])){ 
$number = $_POST['number'];
$colour = $_POST['colour'];
//class concept
class Car 
{   

	function suzuki($number,$colour)
	{
		echo $number;
		echo "<br>";
		echo $colour;

	}
}
$a = new car();//object(real wolrd entite of class by which class have memory)
$a->suzuki($number,$colour);
}
?>