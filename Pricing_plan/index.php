<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/styling.css">
  <link rel="icon" href="./images/favicon.png">
  <title>Index</title>
  <style>
    .footer {
      padding: 20px 0;
      font-size: 14px;
      transition: all 0.3s;
      border-top: 1px solid #cddfff;
      background-color: white;
      font-weight: 500;
      font-family: "Open Sans", sans-serif
    }

    .footer .copyright {
      text-align: center;
      color: #012970;
    }

    body {
      height: 100%;
    }
  </style>
</head>

<body style="background-image: url(./images/background.png);">
  <div class="heading">
    <header>
      <ul>
        <div class="header-part">
          <!-- <li><i class="fa-solid fa-bell bell-icon"></i></li> -->
          <a href="sign.php">
            <li>Login</li>
          </a>
          <a href="signup.php">
            <li>Signup</li>
          </a>
        </div>
      </ul>
    </header>
  </div>
  <div class="pricing">
    <h1 class="pricing-head">Our Pricing & Plans</h1>
  </div>
  <div class="switch-block">
    <div class="switch-container">
      <input type="checkbox" id="switch" class="switch-checkbox">
      <label for="switch" class="switch-label">
        <!-- <span class="switch-inner"></span> -->


        <div class="switch-button">
          <!-- <span class="switch-inner"></span> -->
          <button class="monthly-button" id="monthly"><span>Monthly</span>&nbsp;&nbsp;</button>
          <button class="yearly-button" id="yearly"><span>Yearly </span></button>
        </div>
      </label>
    </div>
  </div>
  <div class="cards-container">
    <div class="card basic">
      <h3 class="head-basic">BASIC</h3>
      <h1 id="basic-price">$4.99/mon</h1>
      <div class="lists">
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 50GB bandwidth</label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; Finance Analysis</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; 24 hour support
        </label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Customer
          Management</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Finance
          Analysis</label>
      </div>
      <div class="buy-nw">
        <a href="signup.php" id="buy-item"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>

    <div class="card standard">
      <h3 class="head-standard">STANDARD</h3>
      <h1 id="standard-price">$9.99/mon</h1>
      <div class="lists">
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 50GB bandwidth</label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; Finance Analysis</label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 24 hour support </label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Customer
          Management</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Finance
          Analysis</label>
      </div>
      <div class="buy-nw">
        <a href="signup.php"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
    <div class="card premium">
      <h3 class="head-premium">PREMIUM</h3>
      <h1 id="premium-price">$14.99/mon</h1>
      <div class="lists">
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 50GB bandwidth</label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; Finance Analysis</label>
        <label class="list-container" id="hoursid"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 24 hour support </label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; Customer
          Management</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Finance
          Analysis</label>
      </div>
      <div class="buy-nw">
        <a href="signup.php"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
    <div class="card special">
      <h3 class="head-special">SPECIAL</h3>
      <h1 id="special-price">$99.99/mon</h1>
      <div class="lists">
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; 50GB bandwidth</label>
        <label class="list-container"><i class="fa-solid fa-check item-checked icn"></i>&nbsp; Finance Analysis</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; 24 hour support
        </label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Customer
          Management</label>
        <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp; Finance
          Analysis</label>
      </div>
      <div class="buy-nw">
        <a href="signup.php"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
  </div>
  <!-- <footer class="footer">
    <h5>copyright © YRP IT SOLUTIONS</h5>
  </footer> -->

  <footer id="footer" class="footer">
    <div class="copyright">
      © Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
    </div>
  </footer>
  <script src="./js/script1.js"></script>
</body>

</html>