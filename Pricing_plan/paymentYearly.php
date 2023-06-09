<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./images/favicon.png">
    <link rel="stylesheet" href="./css/payment.css">
    <title>Payment</title>
</head>

<body>
    <div class="heading">
        <header>
            <ul>
                <div class="header-part">
                    <a href="./price.php">
                        <li>Home</li>
                    </a>
                    <i class="fa-regular fa-bell bell-icon"></i>
                    <a href="order.php"><li>Orders</li></a>
                    <a href="view-profile.php"><li>Profile</li></a>
                    <a href="sign.php">
                        <li>Logout</li>
                    </a>
                </div>
            </ul>
        </header>
    </div>

    <div class="container">
        <!-- ordersummry -->
        <div class="order-summary">
            <div class="order-summary-container">
                <h2 class="order">Order Summary</h2>
                <label class="upgrade">Upgrading Workspace:</label>
                <div class="workspace-container">
                    <span class="zero">0</span><span class="workspace">0<sup>'s</sup> Workspace</span>
                </div>
                <p class="bill">Billing plan</p>
                <div class="billing-plan" id="billing-plan">
                    <div class="per-off">-45%</div>
                    <div class="bill-yearly" id="year-bill">
                        <label class="rad-label"> <input type="radio" class="rad-input">
                            <div class="rad-design"></div>
                        </label>
                        <p id="billed">Billed-Yearly</p>
                        <h2 id='bill-price'><sup class="doller">$</sup>5</h2>
                        <p>MEMBER PER MONTH</p>
                    </div>

                    <!-- <div class="bill-monthly">
                        <label class="rad-label"> <input type="radio" class="rad-input">
                            <div class="rad-design"></div>
                        </label>
                        <p>Billed-monthy</p>
                        <h2><sup class="doller">$</sup>9</h2>
                        <p>MEMBER PER MONTH</p>
                    </div> -->
                </div>

                <!-- <div class="code-content">
                    <span class="code"><i class="fa-solid fa-money-bill"></i> Got a Promo Code?</span>
                </div> -->

                <div class="yearly-plan">

                    <h4 class="yearly">Yearly Plan</h4>
                    <div class="seat">
                        <p>1 Seat</p>
                        <p>$60/year</p>
                    </div>
                    <div class="seat">
                        <p>5 Guest Seats</p>
                        <p style="color: rgb(102, 36, 201);">FREE</p>
                    </div>
                    <div class="today">
                        <div class="bill-today">
                            <h6>Bill Today</h6>
                            <h4>$60</h4>
                        </div>
                        <p>Review for $60 every day</p>
                    </div>
                </div>

                <div class="payment-details">
                    <!-- <div class="payment-head">
                        <h4 class="payment">Payment details <i class="fa-solid fa-lock"
                                style="color:  rgb(155, 155, 219);"></i></h4>
                        <div>
                            <div class="days-off">
                                <h3 class="days">30</h3> DAYS
                            </div>
                            <div id="tri-up"></div>
                            <div class="money-back">MONEY BACK GUARANTEE</div>
                        </div>

                    </div>
                    <input type="text" style="width: 100%;" placeholder="Credit Card Number">
                    <div class="card-details">
                        <input type="date" style="width: 48%;" value="Expiring MM/YY">
                        <input type="password" style="width: 48%; " placeholder="CVV Code">
                    </div>
                    <input type="number" placeholder="Postal Code" style="width: 48%; margin-top: 10px;"> -->
                    <div>
                        <button class="make-payment" type="submit">Make Payment</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ordermethods -->
        <div class="order-methods">
            <h4 style="color: rgb(155, 155, 219); padding: 50px 6px 10px 40px;">Unlimited</h4>
            <div class="description">
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Unlimites</b> Storage</span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Unlimites</b> Folder and Space</span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Advanced</b> Reporting</span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Goolgle Drive, Dropbox, <br>
                        &nbsp; &nbsp; OneDrive/Sharepoint & Box</b> </span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Unlimites</b> Custom Fiedld</span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Unlimites</b> Global</span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> Unlimites<b> Portfollos</b></span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>Permission</b></span>
                <span class="lists"> <i class="fa-solid fa-check ic"></i> <b>2 Guest </b> + 2 extra per member</span>
            </div>
            <div class="trusted">
                <span>Trusted by more than<br> <b>200,000</b> Terms Globally</span>
            </div>
            <div class="cards-container">
                <span>We accept the following cards</span>

                <div class="cards">
                    <img src="./images/visa.jpg">
                    <img src="./images/mastercard.jpg">
                    <img src="./images/meastro.png">
                    <img src="./images/discover.png">
                    <img src="./images/american-express.jpg">
                </div>
            </div>
        </div>

    </div>
    <footer id="footer" class="footer">
        <div class="copyright">
            © Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>