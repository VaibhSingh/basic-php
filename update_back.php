<?php
$con=new mysqli('localhost','root','','practice');
if($con->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$id=$con->real_escape_string($_POST["id"]);
$name=$con->real_escape_string($_POST["name"]);
$email=$con->real_escape_string($_POST["email"]);
$stmt="UPDATE user SET name = '$name', email = '$email' WHERE id='$id'";
if($con->query($stmt)){
    echo "Updated Successful";
}
else{
    echo "not Updated";
}
$con->close();
?>