<?php include("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>

<?php 

    $id1 = $_POST["id"];
    $name1 = $_POST["name"];
    $address1 = $_POST["address"];
    $email1 = $_POST["email"];

    update_student($id1,$name1,$address1,$email1);


?>