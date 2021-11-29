<?php

    // Include config file
    require_once "config.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $id = $request->id;
    $title = $request->title;
    $description = $request->description;
    $sql = "UPDATE MyGuests ";
    $sql = "UPDATE  tasks SET title='$title', description='$description' WHERE id='$id' ";
    
    if ($db->query($sql) === TRUE) {
    
        print json_encode(array("message"=> "succesffully updated", "success"=> true));
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    


    mysqli_close($db);
?>