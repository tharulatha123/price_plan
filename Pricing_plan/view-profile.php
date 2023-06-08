<?php
include('./api/database/config.php');
@session_start();
if (!isset($_SESSION['email'])) {
    header("location:sign.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./css/payment.css">
    <title>View Profile</title>
</head>

<body>
    <div class="heading">
        <header>
            <ul>
                <div class="header-part">
                    <a href="price.php">
                        <li>Home</li>
                    </a>
                    <i class="fa-regular fa-bell bell-icon"></i>
                    <a href="order.php">
                        <li>Orders</li>
                    </a>
                    <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="sign.php">
                    <li>Profile</li>';
                    } else {
                        echo '<a href="view-profile.php">
                     <li>Profile</li>';
                    }

                    ?>
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>
                </div>
            </ul>
        </header>
    </div>


    <div class="profile-deatils-container">

        <div class="row">
            <div class="col-xl-4">
                <?php
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM userlogin WHERE email='$email'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $profile = $row['profile'];




                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    if ($profile = $_FILES['profile']['name']) {

                        //access the images file
                        $profile = $_FILES['profile']['name'];
                        //access the temporary images
                        $temp_profile = $_FILES['profile']['tmp_name'];
                        move_uploaded_file($temp_profile, "./UserProfile/$profile");
                        $sql = "UPDATE userlogin SET name='$name',phone='$phone',address='$address',profile='$profile' WHERE id= $id";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            echo "<script>alert('Updated Successfull')</script>";
                            header('location:view-profile.php');
                        } else {
                            die();
                        }
                    } else {
                        $sql = "UPDATE userlogin SET name='$name',phone='$phone',address='$address' WHERE id= $id";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            echo "<script>alert('Updated Successfull')</script>";
                            header('location:view-profile.php');
                        } else {
                            die();
                        }
                    }
                }
                if ($_SESSION['email'] ==  $email) {
                    echo " 
                    <div class='card'>
                        <div class='card-body profile-card pt-4 d-flex flex-column align-items-center'>
                                
                            <img src='./UserProfile/$profile' name='profile' alt='' width=100 height=100 class='rounded-circle'>
                            <h2>$name</h2>
                            
                        </div>
                    </div>
    
                </div>
    
                <div class='col-xl-8'>
    
                    <div class='card'>
                        <div class='card-body pt-3'>
    
                            <ul class='nav nav-tabs nav-tabs-bordered' role='tablist'>
    
                                <li class='nav-item' role='presentation'>
                                    <button class='nav-link active edit-profile' data-bs-toggle='tab'
                                        data-bs-target='#profile-overview' aria-selected='true' role='tab'>Overview</button>
                                </li>
    
                                <li class='nav-item' role='presentation'>
                                    <button class='nav-link edit-profile' data-bs-toggle='tab'
                                        data-bs-target='#profile-edit' aria-selected='false' tabindex='-1' role='tab'>Edit
                                        Profile</button>
                                </li>
    
                                 <li class='nav-item' role='presentation'>
                                   <button class='nav-link edit-profile' data-bs-toggle='tab'
                                      data-bs-target='#profile-change-password' aria-selected='false' tabindex='-1'
                                   role='tab'>Change Password</button>
                               </li> 

                               <li class='nav-item' role='presentation'>
                               <button class='nav-link edit-profile' data-bs-toggle='tab'
                                  data-bs-target='#profile-delete' aria-selected='false' tabindex='-1'
                               role='tab'>Delete Account</button>
                           </li> 
    
                            </ul>
                            <div class='tab-content pt-2'>
    
                                <div class='tab-pane fade show active profile-overview' id='profile-overview'
                                    role='tabpanel'>
    
                                 
    
                                      <h5 class='card-title'>Profile Details</h5>
    
                                      <div class='row my-3'>
                                          <div class='col-lg-3 col-md-4 label fw-bolder'>Full Name</div>
                                          <div class='col-lg-9 col-md-8'>$name</div>
                                      </div>
      
                                      <div class='row my-3'>
                                          <div class='col-lg-3 col-md-4 label fw-bolder'>Address</div>
                                          <div class='col-lg-9 col-md-8'>$address</div>
                                      </div>
      
                                      <div class='row my-3'>
                                          <div class='col-lg-3 col-md-4 label fw-bolder'>Phone</div>
                                          <div class='col-lg-9 col-md-8'>$phone</div>
                                      </div>
      
                                      <div class='row my-3'>
                                          <div class='col-lg-3 col-md-4 label fw-bolder'>Email</div>
                                          <div class='col-lg-9 col-md-8'>$email</div>
                                      </div>
      
                                  </div>
                                  
                                  <div class='tab-pane fade profile-edit pt-3' id='profile-edit' role='tabpanel'>


                                  <form method='post' enctype='multipart/form-data' autocomplete='off'>
                                      <div class='row mb-3'>
                                          <label for='profileImage' class='col-md-4 col-lg-3 col-form-label'>Profile
                                              Image</label>
                                          <div class='col-md-8 col-lg-9'>
                                              <img  src='./UserProfile/$profile'  width=100 height=100  alt='Profile'>
                                              <div class='pt-2'>   
                                             <input type='file'  name='profile'> 
                                              </div>
                                          </div>
                                      </div>
              
                                      <div class='row mb-3'>
                                          <label for='fullName' class='col-md-4 col-lg-3 col-form-label'>Full Name</label>
                                          <div class='col-md-8 col-lg-9'>
                                              <input  type='text' name='name' class='form-control' id='fullName' value='$name'>
                                          </div>
                                      </div>
              
              
                                      <div class='row mb-3'>
                                          <label for='Address' class='col-md-4 col-lg-3 col-form-label'>Address</label>
                                          <div class='col-md-8 col-lg-9'>
                                              <input name='address' type='text' name='address' class='form-control' id='Address' value='$address'>
                                          </div>
                                      </div>
              
                                      <div class='row mb-3'>
                                          <label for='Phone' class='col-md-4 col-lg-3 col-form-label'>Phone</label>
                                          <div class='col-md-8 col-lg-9'>
                                              <input name='phone' type='text'  class='form-control' id='Phone' value='$phone'>
                                          </div>
                                      </div>
              
                                      <div class='row mb-3'>
                                          <label for='Email' class='col-md-4 col-lg-3 col-form-label'>Email</label>
                                          <div class='col-md-8 col-lg-9'>
                                              <input name='email' type='email' class='form-control' id='Email' value='$email'>
                                          </div>
                                      </div>
              
              
                                      <div class='text-center'>
                                          <button type='submit' name='submit' class='btn btn-primary'>Save Changes</button>
                                      </div>
                                  </form>
              
                              </div>
              ";
                }
                ?>

                <?php
                if (isset($_POST['update'])) {

                    $cpassword = $_POST['cpassword'];
                    $newpassword = $_POST['newpassword'];
                    $hash_password = password_hash($newpassword, PASSWORD_DEFAULT);
                    $renewpassword = $_POST['renewpassword'];

                    if (empty($cpassword)) {
                        echo "<script>alert('Password not be empty')</script>";
                    } elseif (empty($newpassword)) {
                        echo "<script>alert('New Password not be empty')</script>";
                    } elseif (empty($renewpassword)) {
                        echo "<script>alert('Re-enter New Password not be empty')</script>";
                    } elseif ($newpassword != $renewpassword) {
                        echo "<script>alert('New Passwords are not matching')</script>";
                    } else {
                        $email = $_SESSION['email'];
                        $sql = "SELECT password FROM userlogin WHERE email='$email'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $NewCinpassword = password_verify($cpassword, $row['password']);
                        if ($cpassword != $NewCinpassword) {
                            echo "<script>alert('Password Not Matched')</script>";
                        } else {
                            $sql_update = "UPDATE userlogin SET password='$hash_password'";
                            $result_update = mysqli_query($con, $sql_update);
                            if ($result_update) {
                                echo "<script>alert('Password Updated Successfully')</script>";
                            } else {
                                die();
                            }
                        }
                    }
                }
                ?>

                <?php
                if (isset($_POST['delete'])) {
                    $email = $_SESSION['email'];
                    $sql_delete = "DELETE FROM `userlogin` WHERE email='$email'";
                    $result_delete = mysqli_query($con, $sql_delete);
                    if ($result_delete) {                      
                       echo "<script>alert('User Account Deleted Successfully')</script>";
                       @header('location:sign.php');
                       echo "<script>window.open('sign.php','_self')</script>";
                    }else{
                  die();
                    }
                }
                ?>


                <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">

                    <form method='post' autocomplete="off">

                        <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="cpassword" type="password" class="form-control" id="currentPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" name='update' class="btn btn-primary">Change Password</button>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade pt-3" id="profile-delete" role="tabpanel">

                    <form action="" method="post">
                        <button type="submit" name="delete" class="btn btn-danger">Delete Account</button>
                    </form>


                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
    </div>









    <footer id="footer" class="footer">
        <div class="copyright">
            © Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>