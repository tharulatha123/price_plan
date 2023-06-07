<?php
include('./api/database/config.php');
session_start();
if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM `userlogin` WHERE email='$email'";
   $result = mysqli_query($con, $sql);
   $count = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);
   if ($count > 0) {
      $_SESSION['email']=$email;
      // echo $_SESSION['email']=$email; 
      if (password_verify($password, $row['password'])) {
         $email = $row['email'];
         // echo "logged";
         echo "<script>alert('Login Successfull')</script>";
         echo "<script>window.open('price.php','_self')</script>";
      } else {
         echo '<script> alert("Invalid Credentials") </script>';
      }
   } else {
      echo '<script> alert("Invalid Credentials") </script>';
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
            <input type="email" name="email" required autocomplete="off">
            <label>Email Address</label>
         </div>
         <div class="field">
            <input type="password" name="password" required autocomplete="off">
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