<?php 

//Create the database connection using mysqli_connect
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "qwerty";
$dbname = "students";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//Test the mysqli_connection
if (mysqli_connect_errno()) {
	die("Database Connection Failed " . mysqli_connect_error() . 
		"(" . mysqli_connect_errno() . ")");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Testing MySQL</title>
</head>
<body>
<h1>This is MYSQL Testing.</h1>
</body>
</html>


<?php 

mysqli_close($connection);

?>