<?php
$con = new mysqli('localhost','root','','labact3');
if($con->connect_error) {

    die(mysqli_error($con));
}
?>