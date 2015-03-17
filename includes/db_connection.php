<?php 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "qwerty");
define("DB_NAME", "Students");

//Create the database connection using mysqli_connect
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Test the mysqli_connection
if (mysqli_connect_errno()) {
  die("Database Connection Failed " . mysqli_connect_error() . 
    "(" . mysqli_connect_errno() . ")");
}

?>


