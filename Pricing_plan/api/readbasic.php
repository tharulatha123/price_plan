<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

 $data = json_decode(file_get_contents("php://input"), true);

 
 

 include("../api/database/config.php");

 $sql = "SELECT * FROM price_plan,enabled,diabled WHERE diabled.price_id=price_plan.id AND enabled.price_id=price_plan.id AND plan_type= 'basic' AND month_year = 'month' ";
 
 $result = mysqli_query($con,$sql) or die("failed.");

 if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $data = json_encode($output);
    echo $data;
  


 }else{
    echo json_encode(array('message'=> 'not found.', 'status'=>false));
 }

?>