<?php

include("config.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO candidates (candidate_name, candidate_adr, candidate_gdr) VALUE ('$name', '$address', '$gender')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=fail');
    }


} else {
    die("Forbidden");
}

?>