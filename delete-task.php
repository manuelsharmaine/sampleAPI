<?php

    // Include config file
    require_once "config.php";
    

    $data = json_decode(file_get_contents("php://input"));

    $id;
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $result = mysqli_query($db,"DELETE  from tasks where id= '$id'");
    if($result) {
        print json_encode(array("message"=> "succesffully deleted", "success"=> true));
    }
  
    // Close connection
    mysqli_close($db);
?>