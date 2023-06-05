<?php

include('./api/database/config.php');

$id = $_GET['editid'];

if (isset($_POST['submit'])) {
    $month_year = $_POST['month_year'];
    $plan_type = $_POST['plan_type'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $total_amt = $_POST['total_amt'];


    $sql = "UPDATE `price_plan` SET month_year='$month_year',plan_type= '$plan_type',price='$price',
    discount='$discount',total_amt='$total_amt' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data inserted";
        header('location:pricing_data.php');
    }

 
    //updating enable data
    $sql_enable = "SELECT `enabled_id` from `enabled` WHERE price_id=$id";
    $result_enable = mysqli_query($con, $sql_enable);
   $enabled_arr=[];
    if ($result_enable) {
        while ($row = mysqli_fetch_assoc($result_enable)) {
            array_push($enabled_arr,$row['enabled_id']);
        }
    }
  print_r($enabled_arr);
    $stmt_related = $con->prepare("UPDATE `enabled` SET enable_features = ? where enabled_id = ?");
    $dataArray = $_POST['enable_features'];
    $itr=0;
    if (!empty($dataArray)) {
        foreach ($dataArray as $enable_features) {
            $stmt_related->bind_param("si", $enable_features, $enabled_arr[$itr++]);
            $stmt_related->execute();
        }
    }

print_r( $enabled_arr);

    //updating diable data
    $sql_query = "SELECT `disabled_id` FROM `diabled` WHERE price_id=$id ";
    $result_query = mysqli_query($con,$sql_query);
    $disabled_arr = [];
    if($result){
        while($row = mysqli_fetch_assoc($result_query)){
            array_push($disabled_arr,$row['disabled_id']);
        }
    }
    $diable_related = $con->prepare("UPDATE `diabled` SET disable_features = ? where disabled_id = ?");
    $arrayData = $_POST['disable_features'];
    $itr = 0;
    if (!empty($arrayData)) {
        foreach ($arrayData as $disable_features) {
            $diable_related->bind_param("si", $disable_features, $disabled_arr[$itr++]);
            $diable_related->execute();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pricing Plan / Pricing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/pricing-plan.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashborad.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="user.php" class="active">
                            <i class="bi bi-circle"></i><span>User data</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#sales-nav" data-bs-toggle="collapse" href="#">
                    <i class="ri-money-dollar-box-line"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="sales-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="transcations.php">
                            <i class="bi bi-circle"></i><span>Transcation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- transtaction table end -->
            <li class="nav-item">
                <a class="nav-link" data-bs-target="#price-nav" data-bs-toggle="collapse" href="#">
                    <i class="ri-price-tag-2-line"></i><span>Pricing plan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="price-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="pricing_data.php" class="active">
                            <i class="bi bi-circle"></i><span>Pricing Data</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pricing Plan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashborad.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="pricing_plan.php">Pricing Plan</a></li>
                    <li class="breadcrumb-item active">Add Pricing</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Pricing</h5>
                            <form action="" method="post">

                                <?php
                                $id = $_GET['editid'];

                                $sql = "SELECT * FROM price_plan WHERE id = $id";

                                $result = mysqli_query($con, $sql);

                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['id'];
                                        $month_year = $row['month_year'];
                                        $plan_type = $row['plan_type'];
                                        $price = $row['price'];
                                        $discount = $row['discount'];
                                        $total_amt = $row['total_amt'];

                                ?>


                                        <div class="month-year">
                                            <?php
                                            if ($month_year == 'month') {
                                                echo '<input class="form-check-input" type="radio" name="month_year" id="monthly"
                                        value="month" checked>
                                    <label class="form-check-label" for="m_y1">
                                        Monthly
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="month_year" id="yearly"
                                        value="year" disabled>
                                    <label class="form-check-label" for="m_y2">
                                        Yearly';
                                            } else if ($month_year == 'year') {
                                                echo '
                                   
                                    <input class="form-check-input" type="radio" name="month_year" id="yearly"
                                        value="year" checked>
                                    <label class="form-check-label" for="m_y2" >
                                        Yearly
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input" type="radio" name="month_year" id="monthly"
                                        value="month" disabled>
                                    <label class="form-check-label" for="m_y1">
                                        Monthly
                                    </label>';
                                            }
                                            ?>
                                            </label>
                                        </div>
                                        <div class="input-select">
                                            <label for="inputState" class="form-label"></label>
                                            <select id="inputState" name="plan_type" class="form-select">
                                                <?php
                                                if ($plan_type == 'basic') {
                                                    echo '<option value="basic" selected=' . $plan_type . '>Basic</option>
                                            <option value="standard" disabled>Standard</option>
                                            <option value="premium" disabled>Premium</option>
                                            <option value="special" disabled>Special</option>';
                                                } else if ($plan_type == 'standard') {
                                                    echo '<option value="standard" selected=' . $plan_type . '>Standard</option>
                                            <option value="basic" disabled>Basic</option>
                                            <option value="premium" disabled>Premium</option>
                                            <option value="special" disabled>Special</option>';
                                                } else if ($plan_type == 'premium') {
                                                    echo '<option value="premium" selected=' . $plan_type . '>Premium</option>
                                            <option value="basic" disabled>Basic</option>
                                            <option value="standard" disabled>Standard</option>
                                            <option value="special" disabled>Special</option>';
                                                } else if ($plan_type == 'special') {
                                                    echo '<option  value="special" selected=' . $plan_type . '>Special</option>
                                            <option value="basic" disabled>Basic</option>
                                            <option value="standard" disabled>Standard</option>
                                            <option value="premium" disabled>Premium</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 my-5">
                                                <label for="prices" class="form-label">Price</label>
                                                <input type="number" name="price" class="form-control" onkeyup="calculateTotal()" value="<?php echo $price ?>" id="prices">
                                            </div>
                                            <div class="col-md-4 my-5">
                                                <label for="discounts" class="form-label">Discount%</label>
                                                <input type="text" name="discount" class="form-control" onkeyup="calculateTotal()" value="<?php echo $discount ?>" id="discounts">
                                            </div>
                                            <div class="col-md-4 my-5">
                                                <label for="total" class="form-label">Total Amount</label>
                                                <input type="text" name="total_amt" value="<?php echo $total_amt ?>" class="form-control" id="total">
                                            </div>
                                        </div>
                                <?php
                                    }
                                }

                                ?>
                                <div class="row my-3" id="row1">
                                    <div class="col-md-12" id="inputbox1">
                                        <label for="enable" class="form-label">Enabled Features</label> 
                                        <?php
                                        $id = $_GET['editid'];

                                        $sql = "SELECT * FROM price_plan INNER JOIN enabled ON price_plan.id = enabled.price_id AND id = $id";

                                        $result = mysqli_query($con, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                                <input type="text" name="enable_features[]" value="<?php echo $row['enable_features'] ?>" class="form-control space-btwn enableData" id="enable">

                                        <?php

                                            }
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="row my-3" id="row2">
                                    <div class="col-md-12" id="inputbox2">
                                        <label for="diable" class="form-label">Disable Features</label> 
                                        <?php
                                        $id = $_GET['editid'];

                                        $sql = "SELECT * FROM price_plan INNER JOIN diabled ON price_plan.id = diabled.price_id AND id = $id";

                                        $result = mysqli_query($con, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                                <input type="text" name="disable_features[]" value="<?php echo $row['disable_features'] ?>" class="form-control space-btwn diableData" id="diable">

                                        <?php

                                            }
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="text-center my-5">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="cancle" class="btn btn-secondary">Cancle</button>
                                </div>


                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <script src="./js/script.js"></script>

</body>

</html>