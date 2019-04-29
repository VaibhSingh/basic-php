<?php
$con=new mysqli('localhost','root','','practice');
if($con->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$name=$con->real_escape_string($_POST["name"]);
$email=$con->real_escape_string($_POST["email"]);
$stmt="INSERT INTO user(name, email ) VALUES ('$name','$email') ";
if($con->query($stmt)){
    echo "Entry Successful";
}
else{
    echo "not Entered";
}
$con->close();
?>