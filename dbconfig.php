<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gettop3');
define('DB_PORT', '3308');
 
/* Attempt to connect to MySQL database */
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME ,DB_PORT);
 
// Check connection
if($connect === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
?>