<?php

include("config.php");

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql = "UPDATE candidates SET candidate_name='$name', candidate_adr='$address', candidate_gdr='$gender' WHERE candidate_id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php');
    } else {
        die("Editing failed");
    }


} else {
    die("Forbidden");
}

?>