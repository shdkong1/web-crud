<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM candidates WHERE candidate_id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list.php');
    } else {
        die("Remove failed");
    }

} else {
    die("Forbidden");
}

?>