<?php

    // Include config file
    require_once "config.php";
    $id = $_GET['id'];
    $result = mysqli_query($db,"SELECT * from tasks where id= '$id'");
    $row = $result->fetch_assoc();
   
    print json_encode($row);
    // Close connection
    mysqli_close($db);
?>