<?php
$conn = new mysqli('localhost','root','','cafeteria');
if($conn->connect_error) {
    echo $error->$conn->connect_error;
}
?>