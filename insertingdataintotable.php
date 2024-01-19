<?php
$servername="localhost"; // by default
$username = "root"; // by default
$password = ""; // by default
$database = "phpyashdb1";
$conn = mysqli_connect($servername, $username, $password, $database);
echo "<br>connection established successfully<br>";
$name = "utuu";
$id = 3;

$result = mysqli_query($conn, "insert into hello2 (name, id) values('yashraj', 2)");
$result2 = mysqli_query($conn, "insert into hello2 values('$name', '$id')");
if(!$result){
    die("data did not created". mysqli_error($conn));
}
else{
    echo "data created successfully",var_dump($result);
}

?>