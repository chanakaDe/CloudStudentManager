<?php 

function delete_student($student_id){
	global $connection;
	$query = "delete from student where id = {$student_id}";
	$result = mysqli_query($connection , $query);
	if ($result && mysqli_affected_rows($connection) == 1) {
		echo "Deleting Success";
		header("Location: ViewStudent.php");
	}else{
		echo "Deleting Failed";
	}
}

function get_student($id){
	global $connection;
	$query = "select * from basicdetails where id = {$id}";
	$result = mysqli_query($connection , $query);
	return $result;
}

function update_student($id,$name,$address,$email){
	global $connection;
	$query = "update student set name = '{$name}' , address = '{$address}' , email = '{$email}' where id = {$id} ";
	$result = mysqli_query($connection , $query);
	if ($result) {
		echo "Updating Success";
		header("Location: ViewStudent.php");
	}else{
		die("Database Query Failed "."<br>"."<h2>".mysqli_error($connection)."</h2>");
	}
}

function saveStudent($id,$name,$address,$email){
	global $connection;
	$query = "INSERT INTO student ".
       "(id,name, address,email) ".
       "VALUES ".
       "('$id','$name','$address','$email')";

	$result = mysqli_query($connection , $query);

	if ($result) {
		header("Location: AddStudent.php");
	}else{
		die("Database Query Failed "."<br>"."<h2>".mysqli_error($connection)."</h2>");
	}
}

function get_last_id(){
	global $connection;
	$query = "select id from student order by 1 desc limit 1;";
	$result = mysqli_query($connection , $query);
	return $result;
}

function is_logged(){
	global $_SESSION;
	if (!($_SESSION["username"]=="admin" && $_SESSION["password"]==1234)) {
		header("Location: index.php");
	}
}
?>
