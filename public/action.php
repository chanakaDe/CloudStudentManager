<?php 

session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

if ($username == "admin" && $password == 1234) {
	header("Location: dash.php");
}else{
	echo "Incorrect Username or Password";
}

?>