<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "form";
$conn = new mysqli($servername, $username, $password, $db);
if (!$conn) {
  echo "Connection failed";
  exit();
}
echo "Connected successfully";
?>