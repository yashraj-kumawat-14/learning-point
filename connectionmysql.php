<?php
echo "this is on connecting to mysql database on localhost";
/*you can connect to database via two ways :
1. MySQLi extension (PHP DATABASE OBJECT YOU CAN USE IT WITH ONLY MYSQL DBMS)
2. PDO (PHP DATABASE OBJECT YOU CAN USE IT WITH MULTIPLE DBMS) */
$servername="localhost"; // by default
$username = "root"; // by default
$password = ""; // by default
$conn = mysqli_connect($servername, $username, $password);
echo "<br>connection established successfully";
?>