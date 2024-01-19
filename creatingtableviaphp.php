<?php
$servername="localhost"; // by default
$username = "root"; // by default
$password = ""; // by default
$database = "phpyashdb1";
$conn = mysqli_connect($servername, $username, $password, $database);

echo "<br>connection established successfully<br>";

$result = mysqli_query($conn, "create table hello2(name varchar(14), id int)");
if(!$result){
    die("table did not created". mysqli_error($conn));
}
else{
    echo "table created successfully",var_dump($result);
}

?>