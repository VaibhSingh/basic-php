<?php
$con=new mysqli('localhost','root','','practice');
$id=$con->real_escape_string($_POST["id"]);
$stmt="DELETE FROM user where id='$id'";
if($con->query($stmt)){
    echo "DELETED SUCCESSFULLY";
}
else{
    echo "NOT DELETED";
}
?>