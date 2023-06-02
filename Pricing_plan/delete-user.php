<?php 
include "connection.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `userlogin` WHERE id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "data deleted";
        header('location:user.php');
    }else{
    die(mysqli_error($con));
    }
}


?>