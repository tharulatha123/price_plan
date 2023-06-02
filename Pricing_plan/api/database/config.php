<?php

$con = new mysqli("localhost","root","","table2");

if(!$con){
    die(mysqli_error($con));
}

// $db = new  Database();
// $db->connect();

?>