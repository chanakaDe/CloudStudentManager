<?php include("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>

<?php 
session_start();
is_logged();
?>

<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<br><br>
       <div class="row" style="padding-left : 100px;padding-right:100px;">
           <div class="panel panel-danger">
               <div class="panel-heading">
                   <h3 class="panel-title">Remove Student</h3>
               </div>
               <div class="panel-body">
                   <?php 

                   $id=$_GET["id"];
                   delete_student($id);
                   echo "<h1>Student Deleted ".$id."</h1>";

                    ?>
                   
               </div>
           </div>
       </div>


