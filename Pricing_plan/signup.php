<?php
include('./api/database/config.php');
include('function.php');

if (isset($_POST['signup'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $password = $_POST['password'];
   $hash_password = password_hash($password, PASSWORD_DEFAULT);
   $cpassword = $_POST['cpassword'];
   $user_ip = getIPAddress();

   //access the images file
   $profile = $_FILES['profile']['name'];
   //access the temporary images
   $temp_profile = $_FILES['profile']['tmp_name'];

   //checking user in already exists or not
   $select_query = "SELECT * FROM `userlogin` where name='$name' or email='$email' ";
   $result_query = mysqli_query($con, $select_query);
   $num_rows = mysqli_num_rows($result_query);
   if ($num_rows > 0) {
      echo "<script>alert('User already exisisted!!.. Login or Signup with another account')</script>";
   } else if ($password != $cpassword) {
      echo "<script>alert('Password is not matching')</script>";
   } else {

      move_uploaded_file($temp_profile, "./UserProfile/$profile");

      $sql = "INSERT INTO  `userlogin`(name,email,phone,address,user_ip,profile,password)
      VALUES('$name','$email','$phone','$address','$user_ip','$profile','$hash_password')";
      $result = mysqli_query($con, $sql);

      if ($result) {
         // echo "Sign up successfully";
         echo "<script>alert('Register Successfull')</script>";
         echo "<script>window.open('sign.php','_self')</script>";
      } else {
         die;
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <link rel="icon" href="./images/favicon.png">
   <title>Signup</title>
   <link rel="stylesheet" href="./css/style.css">
</head>

<body>
   <div class="wrapper">
      <div class="title">
         Signup
      </div>
      <form method="post" enctype="multipart/form-data" autocomplete="off">
         <div class="field">
            <input type="text" name="name" required>
            <label>Name</label>
         </div>
         <div class="field">
            <input type="email" name="email" required>
            <label>Email ID</label>
         </div>
         <div class="field">
            <input type="number" name="phone" required>
            <label>Mobile Number</label>
         </div>
         <div class="field">
            <input type="file" name="profile" required>
            <label>Add Profile</label>
         </div>

         <div class="field">
            <input type="text" name="address" required>
            <label>Address</label>
         </div>
         <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
         </div>
         <div class="field">
            <input type="password" name="cpassword" required>
            <label>Confirm Password</label>
         </div>

         <div class="field">
            <input type="submit" name="signup" value="Signup">
         </div>
         <div class="signin-link">
            Already have an account? <a href="sign.php">Login</a>
         </div>
      </form>
   </div>
</body>

</html>