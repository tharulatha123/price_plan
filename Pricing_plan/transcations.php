<?php

include('./api/database/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sales/ Transcation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <link rel="stylesheet" href="./css/invoice.css">
  <style>
    @media screen and (max-width:767px) {
      .card {
        width: 200%;
      }

    }
  </style>
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
            <a href="user.php">
              <i class="bi bi-circle"></i><span>User data</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-target="#sales-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-money-dollar-box-line"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sales-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="transcations.php" class="active">
              <i class="bi bi-circle"></i><span>Transcation</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- transtaction table end -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#price-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-price-tag-2-line"></i><span>Pricing Plan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="price-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        
          <li>
            <a href="pricing_data.php">
              <i class="bi bi-circle"></i><span>Pricing Data</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sales</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashborad.php">Home</a></li>
          <li class="breadcrumb-item"><a href="transcations.php">Sales</a></li>
          <li class="breadcrumb-item active">Transcation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Transcation Details</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable table-bcg">
                <thead>
                  <tr>
                    <th scope="col">SI NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date-Time</th>
                    <th scope="col">Invoice id</th>
                    <th scope="col">Transtaction id</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Invoice</th>



                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <th>mike</th>
                    <td>2023-10-2 10:30AM</td>
                    <td>65467</td>
                    <td>765786788</td>
                    <td>paypal</td>
                    <td>300</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-file-earmark-text"></i>
                      </button></td>
                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                              id="close_button">Close</button>
                            <button type="button" class="btn btn-danger" onclick="window.print()"
                              id="print_Button">Print</button>

                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <div class="invoice-container">
                                <!-- left content -->
                                <div class="content-left">
                                  <div class="address">
                                    <p>Zinker Inc</p>
                                    <p>2987 Central Avenue</p>
                                    <p>Pheonix, Arizon-987897</p>
                                    <p>United State</p>
                                    <div class="border-buttom"></div>
                                  </div>
                                  <div class="content-left-buttom">
                                    <p><b>billed To</b></p>
                                    <p>John Deo</p>
                                  </div>

                                </div>
                                <!-- right content -->
                                <div class="content-right">
                                  <h3>INVOICE</h3>
                                  <p>Invoice # <b>10</b></p>
                                  <p>Invoice Date <b>26-8-2022</b></p>
                                  <div class="border-buttom"></div>

                                  <div class="content-right-buttom">
                                    <p><b>subscription</b></p>
                                    <p>Transcation ID <b>ghuiyt877698</b></p>
                                    <p>Billing Period <b> May 10 to June 10,
                                        2023</b></p>
                                    <p>Next Billing Date <b>June 10 2023</b></p>
                                  </div>

                                </div>
                              </div>
                              <div class="amt-description">
                                <div class="description">
                                  <p>description</p>
                                </div>
                                <div class="amount">
                                  <p>Amount(usd)</p>
                                </div>
                              </div>
                              <div class="monthly-price-container">
                                <div class="plans-description">
                                  <p><b>Monthly 590/-</b></p>
                                  <p>This plan comes with the following features</p>
                                  <p>- 50GB bandwidth</p>
                                  <p>- Finance Analysis</p>
                                  <p>- 24 hour support</p>
                                  <p>- Customer Management</p>
                                  <p>- Finance Analysis</p>
                                </div>
                                <div class="price">
                                  <p><b>590/-</b></p>
                                </div>
                              </div>
                              <div class="additional-storage-price">
                                <div class="additional-storage">
                                  <p><b>Aditional Storage</b></p>
                                  <p>Addtional storage of 50GB</p>
                                </div>
                                <div class="additionali-price">
                                  <p><b>100/-</b></p>
                                </div>
                              </div>
                              <div class="total-price">
                                <div class="total">
                                  <p><b>Total</b></p>
                                </div>
                                <div class="t-price">
                                  <p><b>690/-</b></p>
                                </div>
                              </div>
                              <div class="border-buttom-price"></div>
                              <div class="amount-price">
                                <div class="amount-due">
                                  <h6><b>Amount Due(USD)</b></h6>
                                </div>
                                <div class="totalamount">
                                  <h6><b>690/-</b></h6>
                                </div>
                              </div>
                              <div class="border-buttom-price"></div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>John</td>
                    <td>2023-11-2 12:15PM</td>
                    <td>5756</td>
                    <td>909768756</td>
                    <td>strope</td>
                    <td>200</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-file-earmark-text"></i>
                      </button></td>
                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                              id="close_button">Close</button>
                            <button type="button" class="btn btn-danger" onclick="window.print()"
                              id="print_Button">Print</button>

                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <div class="invoice-container">
                                <!-- left content -->
                                <div class="content-left">
                                  <div class="address">
                                    <p>Zinker Inc</p>
                                    <p>2987 Central Avenue</p>
                                    <p>Pheonix, Arizon-987897</p>
                                    <p>United State</p>
                                    <div class="border-buttom"></div>
                                  </div>
                                  <div class="content-left-buttom">
                                    <p><b>billed To</b></p>
                                    <p>John Deo</p>
                                  </div>

                                </div>
                                <!-- right content -->
                                <div class="content-right">
                                  <h3>INVOICE</h3>
                                  <p>Invoice # <b>10</b></p>
                                  <p>Invoice Date <b>26-8-2022</b></p>
                                  <div class="border-buttom"></div>

                                  <div class="content-right-buttom">
                                    <p><b>subscription</b></p>
                                    <p>Transcation ID <b>ghuiyt877698</b></p>
                                    <p>Billing Period <b> May 10 to June 10,
                                        2023</b></p>
                                    <p>Next Billing Date <b>June 10 2023</b></p>
                                  </div>

                                </div>
                              </div>
                              <div class="amt-description">
                                <div class="description">
                                  <p>description</p>
                                </div>
                                <div class="amount">
                                  <p>Amount(usd)</p>
                                </div>
                              </div>
                              <div class="monthly-price-container">
                                <div class="plans-description">
                                  <p><b>Monthly 590/-</b></p>
                                  <p>This plan comes with the following features</p>
                                  <p>- 50GB bandwidth</p>
                                  <p>- Finance Analysis</p>
                                  <p>- 24 hour support</p>
                                  <p>- Customer Management</p>
                                  <p>- Finance Analysis</p>
                                </div>
                                <div class="price">
                                  <p><b>590/-</b></p>
                                </div>
                              </div>
                              <div class="additional-storage-price">
                                <div class="additional-storage">
                                  <p><b>Aditional Storage</b></p>
                                  <p>Addtional storage of 50GB</p>
                                </div>
                                <div class="additionali-price">
                                  <p><b>100/-</b></p>
                                </div>
                              </div>
                              <div class="total-price">
                                <div class="total">
                                  <p><b>Total</b></p>
                                </div>
                                <div class="t-price">
                                  <p><b>690/-</b></p>
                                </div>
                              </div>
                              <div class="border-buttom-price"></div>
                              <div class="amount-price">
                                <div class="amount-due">
                                  <h6><b>Amount Due(USD)</b></h6>
                                </div>
                                <div class="totalamount">
                                  <h6><b>690/-</b></h6>
                                </div>
                              </div>
                              <div class="border-buttom-price"></div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </tr>


                </tbody>
              </table>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>