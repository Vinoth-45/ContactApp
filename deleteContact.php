<?php 
    session_start();
    include "./db_config/db_connection.php";
    $tablename = $_SESSION['tablename'];
    $id = $_GET['id'];
    $sql = "DELETE FROM ".$tablename." WHERE contact_id = $id"; 
    if ($mysql->query($sql) === TRUE) {
        header('location: index.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>