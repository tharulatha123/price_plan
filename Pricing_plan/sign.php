<?php
include('./api/database/config.php');

if(isset($_POST['login'])){
   $email = $_POST['email'];
   $password = $_POST['password'];


   $sql = "SELECT * FROM `userlogin` WHERE email='$email'";
   $result = mysqli_query($con,$sql);
   $count = mysqli_num_rows($result);
   if($count>0){
      while($row = mysqli_fetch_assoc($result)){
         if(password_verify($password,$row['password'])){
            $email = $row['email'];
            header('location:price.php');
         }else{
            echo "login failed";
         }
      }
   }
}
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="icon" href="./images/favicon.png">
      <title>Login</title>
      <link rel="stylesheet" href="./css/style.css">
     
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login 
         </div>
         <form method="post" autocomplete="off">
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>