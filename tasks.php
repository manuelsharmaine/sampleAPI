<?php

    // Include config file
    require_once "config.php";
    $result = mysqli_query($db,"SELECT * from tasks");
    $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
        $rows['tasks'][] = $r;
      }
   
    print json_encode($rows);
    // Close connection
    mysqli_close($db);
?>