<?php
$servername="localhost"; // by default
$username = "root"; // by default
$password = ""; // by default
$conn = mysqli_connect($servername, $username, $password);
// making query of sql
$sql = "create database phpyashdb1";
echo "<br>connection established successfully";
$result = mysqli_query($conn, $sql);
if($result){
    echo "the database was created successfully", var_dump($result);
}
else{
    echo "the database didn't create success fully", var_dump($result);
}

?>