<?php

define('DBHOST', ''); // Add your host
define('DBUSER', ''); // Add your username
define('DBPASS', ''); // Add your password
define('DBNAME', ''); // Add your database name
//MySQLi Object / Procedural
// for MySqli use $con 
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$conn) {
    die('Error: Could not connect: ' . mysqli_error());
}
mysqli_set_charset($conn,"utf8");
?>
