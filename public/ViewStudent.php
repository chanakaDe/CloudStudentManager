<?php include("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>

<?php 
session_start();
is_logged();
?>

<?php 
$query = "SELECT * FROM student";
$results = mysqli_query($connection, $query);
if (!$results) {
  echo "Database Query Error - ".mysqli_error($connection);
}
?>
<?php include("../includes/layouts/header.php") ?>

    <div id="page-wrapper" style="height: 640px;">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>


       <div class="row">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 class="panel-title">View Students</h3>
               </div>
               <div class="panel-body">
                   <table class="table table-bordered">
                       <tr>
                           <th>Student ID</th>
                           <th>Student Name</th>
                           <th>Address</th>
                           <th>Email</th>
                           <th>Options</th>
                           <!-- <th>Update / Remove</th> -->
                       </tr>

                       
                            <?php 
                            $file="DeleteStudent.php";
                            while ($row = mysqli_fetch_assoc($results)) {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                            echo "<td>"."<a href=UpdateStudent.php?id={$row["id"]}>Update</a> /
                            <a href=DeleteStudent.php?id={$row["id"]}>Remove</a>"."</td>";
                            echo "</tr>";
                            }
                            ?>
                       <!-- <a class="button" href="DeleteStudent.php"></a> -->
                   </table>
                   
               </div>
           </div>
       </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include("../includes/layouts/footer.php") ?>
