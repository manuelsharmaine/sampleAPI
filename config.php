<?php
 header('Access-Control-Allow-Origin: http://localhost:8100'); 
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
   header('Content-Type: application/json');
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ite316');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>