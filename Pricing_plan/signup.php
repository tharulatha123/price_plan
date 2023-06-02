<?php 
include('./api/database/config.php');

if(isset($_POST['signup'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

$password = password_hash($password,PASSWORD_DEFAULT);

   $sql = "INSERT INTO  `userlogin`(name,email,phone,password,cpassword)
   VALUES('$name','$email','$phone','$password','$cpassword')";
   $result = mysqli_query($con,$sql);
   
   if($result){
      // echo "Sign up successfully";
      header('location:sign.php');
   }else{
      die;
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
         <form method="post" autocomplete="off">
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
            Already have an account?  <a href="sign.php">Login</a>
            </div>
         </form>
      </div>
   </body>
</html>