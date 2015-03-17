<?php 

//Create the database connection using mysqli_connect
include("../includes/db_connection.php");
require_once("../includes/functions.php");

//Taking values from HRTML Form
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

echo $id ."<br>".$name."<br>".$address."<br>".$email."<br>";

saveStudent($id,$name,$address,$email);

 echo "End of Databse Operation !!!!";

 // mysqli_close($connection);

 ?> 