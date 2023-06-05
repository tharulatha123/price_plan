<?php 

$arr = array("Peter"=>"HII", "Ben"=>37, "Joe"=>43);

var_dump($arr);

echo  json_encode($arr);
$output=[];
   if (mysqli_num_rows($result) > 0) {
      while($row=mysqli_fetch_assoc($result))
    { array_push($output,$row['enabled_features']);
      // print_r($output);

     }
     echo json_encode($output);
    }
?>