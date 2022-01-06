<html>
<body>
<form method="POST">
  Enter Number : <input type="number" name="number"><br><br>    
<input type="submit" name="submit">
</form>
</body>
</html>
<?php   
if(isset($_POST['submit'])){ 
        $num = $_POST['number'];   
        if(($num % 2) == 0){  
            echo "$num is an Even number";  
        }else{  
            echo "$num is Odd number";  
        }  
    } 
?>