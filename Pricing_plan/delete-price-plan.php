<?php 

include('./api/database/config.php');

$id = $_GET['deleteid'];

$sql = "DELETE FROM `price_plan` WHERE id=$id";

$result = mysqli_query($con,$sql);

if($result){
    header('location:pricing_data.php');
}else{
    die;
}
?>