<?php include("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>

<?php 
session_start();
is_logged();
?>

<?php 
$final_id = "";
$results = get_last_id();
while ($row = mysqli_fetch_assoc($results)) {
    $last_id = $row["id"];
    if ($last_id == null) {
        $final_id = 1 ;
    }else{
        $final_id = $last_id + 1 ;
    }
}
?>

<?php include("../includes/layouts/header.php") ?>

    <div id="page-wrapper" style="height: 640px;">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Add Student
                    </h3>
                </div>
                <div class="panel-body">

                    <fieldset>

                    <form action="StudentSave.php" method="POST">
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 control-label"> ID</label>

                                <div class="col-lg-8">
                                    <input type="hidden" name="id" class="form-control"
                                           placeholder="Enter Student ID" value="<?php echo $final_id; ?>">
                                           <label class="contril-label"><?php echo "{$final_id}"; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 control-label"> Name</label>

                                <div class="col-lg-8">
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Enter Student Name">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-lg-2 control-label">Address</label>

                                <div class="col-lg-8">
                                    <input type="text" name="address" class="form-control"
                                           placeholder="Enter Student Address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 control-label">Email</label>

                                <div class="col-lg-8">
                                    <input type="text" name="email" class="form-control"
                                           placeholder="Enter Student Email">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-offset-9 col-lg-3">
                        <button class="btn btn-default btn-primary">Add Student</button>
                    </div>
                    </form>
                    </fieldset>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include("../includes/layouts/footer.php") ?>
<?php 

 ?>
