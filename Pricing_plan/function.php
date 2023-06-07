<?php





function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  



function getSelection()
{
    include('./api/database/config.php');



    $sql = "SELECT * FROM `price_plan`";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);
    if ($result) {
        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $plan_type = $row['plan_type'];
            array_push($arr, $plan_type);
            // echo '<br>';
            // echo $plan_type;
        }
        // print_r($arr);
        $basic = 0;
        $standard = 0;
        $premium = 0;
        $special = 0;
        foreach ($arr as $rowval) {
            if ($rowval == 'basic') {
                $basic++;
            } elseif ($rowval == 'standard') {
                $standard++;
            } elseif ($rowval == 'premium') {
                $premium++;
            } elseif ($rowval == 'special') {
                $special++;
            }
        }
        // echo $basic;
        // echo $standard;
        // echo $premium;
        // echo $special;
        if($basic<2 and $standard<2 and $premium <2 and $special <2){
            echo '<select id="inputState" name="plan_type" class="form-select">
            <option selected="">Select Plan</option>
            <option value="basic" >Basic</option>
            <option value="standard" >Standard</option>
            <option value="premium" >Premium</option>
            <option value="special" >Special</option>
        </select>'; 
        }elseif ($basic >= 2 and $standard >= 2 and $premium >= 2 and $special >= 2) {
            echo '<select id="inputState" name="plan_type" class="form-select">
            <option selected="">Select Plan</option>
            <option value="basic" disabled>Basic</option>
            <option value="standard" disabled>Standard</option>
            <option value="premium" disabled>Premium</option>
            <option value="special" disabled>Special</option>
        </select>';
        } elseif ($basic >= 2) {
            echo ' <select id="inputState" name="plan_type" class="form-select">
        <option selected="">Select Plan</option>
        <option value="standard">Standard</option>
        <option value="premium">Premium</option>
        <option value="special">Special</option>
    </select>';
        } elseif ($standard >= 2) {
            echo '<select id="inputState" name="plan_type" class="form-select">
        <option selected="">Select Plan</option>
        <option value="basic">Basic</option>
        <option value="premium">Premium</option>
        <option value="special">Special</option>
    </select>';
        } elseif ($premium >= 2) {
            echo '<select id="inputState" name="plan_type" class="form-select">
        <option selected="">Select Plan</option>
        <option value="basic">Basic</option>
        <option value="standard">Standard</option>
        <option value="special">Special</option>
    </select>';
        } elseif ($special >= 2) {
            echo '<select id="inputState" name="plan_type" class="form-select">
        <option selected="">Select Plan</option>
        <option value="basic">Basic</option>
        <option value="standard">Standard</option>
        <option value="premium">Premium</option>
    </select>';
        }
    }
}




// $sql_fetch = "SELECT * FROM `price_plan`";
// $result_data = mysqli_query($con, $sql_fetch);
// while ($row = mysqli_fetch_assoc($result_data)) {
//     $id = $row['id'];
//     echo $id;
// }