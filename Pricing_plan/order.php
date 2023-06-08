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
    <link rel="icon" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styling.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="./css/invoice.css">
    <title>Orders</title>

</head>

<body style=" background: #f6f9ff;">

    <div class="heading">
        <header>
            <ul>
                <div class="header-part" style="padding-top: 12px;  font-size: 17px;">
                    <a class="a" href="price.php">
                        <li>Home</li>
                    </a>
                    <i class="fa-regular fa-bell bell-icon"></i>
                    <a class="a" href="order.php">
                        <li>Orders</li>
                    </a>
                    <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a class="a" href="sign.php">
              <li>Profile</li>';
                    } else {
                        echo '<a class="a" href="view-profile.php">
              <li>Profile</li>';
                    }

                    ?>
                    </a>
                    <a class="a" href="logout.php">
                        <li>Logout</li>
                    </a>
                </div>
            </ul>
        </header>
    </div>
    <h1>Order Details</h1>
    <div class="order-table">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SI no</th>
                    <th>Invoice ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Plan Type</th>
                    <th>Total Amount</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>675675</td>
                    <td>2023-5-22</td>
                    <td>2023-5-22</td>
                    <td>Basic</td>
                    <td>$320,800</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-file-invoice"></i>
                        </button></td>
                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close_button">Close</button>
                                    <button type="button" class="btn btn-danger" onclick="window.print()" id="print_Button">Print</button>

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
                                                <p><b>Monthly</b></p>
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

            <tbody>
        </table>
    </div>

    <footer id="footer" class="footer">
        <div class="copyright">
            © Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</body>

</html>