<?php

    // Include config file
    require_once "config.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $title = $request->title;
    $description = $request->description;

    $sql = "INSERT INTO tasks (title, description, status)
    VALUES (' $title' , ' $description ', 'active')";
    
    if ($db->query($sql) === TRUE) {
    
        print json_encode(array("message"=> "succesffully save", "success"=> true));
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    


    mysqli_close($db);
?>