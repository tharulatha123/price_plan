<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/styling.css">
  <link rel="icon" href="./images/favicon.png">
  <title>plans</title>
</head>

<body style="background-image: url(./images/background.png);">

  <div class="heading">
    <header>
      <ul>
        <div class="header-part">
          <a href="price.php">
            <li>Home</li>
          </a>
          <i class="fa-regular fa-bell bell-icon"></i>
          <li>Orders</li>
          <a href="profile.html">
            <li>Profile</li>
          </a>
          <a href="sign.php">
            <li>Logout</li>
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
    <div class="card basic" id="basic">
      <h3 class="head-basic">BASIC</h3>
      <h1 id="basic-price"></h1>
      <div class="lists" id="lists-basics">
      </div>
      <div class="buy-nw">
        <a href="paymentMonthly.html" id="buy_btn1"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
    <div class="card standard">
      <h3 class="head-standard">STANDARD</h3>
      <h1 id="standard-price"></h1>
      <div class="lists" id="list-standard" >
      
      </div>
      <div class="buy-nw">
        <a href="paymentMonthly.html" id="buy_btn2"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
    <div class="card premium">
      <h3 class="head-premium">PREMIUM</h3>
      <h1 id="premium-price"></h1>
      <div class="lists" id="list-premium">
      </div>
      <div class="buy-nw">
        <a href="paymentMonthly.html" id="buy_btn3"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
    <div class="card special">
      <h3 class="head-special">SPECIAL</h3>
      <h1 id="special-price"></h1>
      <div class="lists" id="list-special">
      </div>
      <div class="buy-nw">
        <a href="paymentMonthly.html" id="buy_btn4"><button class="buy-button">Buy Now</button></a>
      </div>
    </div>
  </div>
  <footer id="footer" class="footer">
    <div class="copyright">
      © Copyright <strong><span>abc@gmail.com</span></strong>. All Rights Reserved
    </div>
  </footer>
  <!-- <script src="./js/script.js"></script> -->

  <script>
    let basic = document.getElementById("basic-price");
    let standard = document.getElementById("standard-price");
    let premium = document.getElementById("premium-price");
    let special = document.getElementById("special-price");
    let yearly = document.getElementById("yearly");
    let monthly = document.getElementById("monthly");

    

   let fetchMonthly = () =>{
     //fetch basic price data
     fetch('http://localhost/Pricing_plan/api/readbasic.php')
      .then(response => response.json())
      .then(data => {
        // console.log(data)

        let enableArray = []
        for (let i = 0; i < data.length; i++) {
          enableArray.push(data[i].enable_features)
          
        }
        const enableList = enableArray.filter((ele, index) => {
          return enableArray.indexOf(ele) === index;
        });
        console.log(enableList);
        
       enableList.forEach((val)=>{
        document.getElementById('lists-basics').innerHTML +=` <label class="list-container" id="bandwidth"><i class="fa-solid fa-check item-checked icn"></i>&nbsp;${val}</label>`;
       }) 
           
        let disableArray = []
        for(let i=0;i<data.length;i++){
          disableArray.push(data[i].disable_features)
        }
        const diableList = disableArray.filter((ele, index) => {
          return disableArray.indexOf(ele) === index;
        });
         console.log(diableList);
         diableList.forEach((val)=>{
        document.getElementById('lists-basics').innerHTML +=` <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp;${val}</label>`;
       }) 

        basic.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })


      //features of standard
    fetch('http://localhost/Pricing_plan/api/readdatastandard.php')
      .then(response => response.json())
      .then(data => {
        // console.log(data);
        let enableArray = []
        for (let i = 0; i < data.length; i++) {
          enableArray.push(data[i].enable_features)
          
        }
        const enableList = enableArray.filter((ele, index) => {
          return enableArray.indexOf(ele) === index;
        });
        console.log(enableList);
        
       enableList.forEach((val)=>{
        document.getElementById('list-standard').innerHTML +=` <label class="list-container" id="bandwidth"><i class="fa-solid fa-check item-checked icn"></i>&nbsp;${val}</label>`;
       }) 
           
        let disableArray = []
        for(let i=0;i<data.length;i++){
          disableArray.push(data[i].disable_features)
        }
        const diableList = disableArray.filter((ele, index) => {
          return disableArray.indexOf(ele) === index;
        });
         console.log(diableList);
         diableList.forEach((val)=>{
        document.getElementById('list-standard').innerHTML +=` <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp;${val}</label>`;
       }) 
        standard.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })
      .catch(error => {
        console.error('Error:', error);
      });

    //fetch premium data
    fetch('http://localhost/Pricing_plan/api/readpremium.php')
      .then(response => response.json())
      .then(data => {
        // console.log(data)
        let enableArray = []
        for (let i = 0; i < data.length; i++) {
          enableArray.push(data[i].enable_features)
          
        }
        const enableList = enableArray.filter((ele, index) => {
          return enableArray.indexOf(ele) === index;
        });
        console.log(enableList);
        
       enableList.forEach((val)=>{
        document.getElementById('list-premium').innerHTML +=` <label class="list-container" id="bandwidth"><i class="fa-solid fa-check item-checked icn"></i>&nbsp;${val}</label>`;
       }) 
           
        let disableArray = []
        for(let i=0;i<data.length;i++){
          disableArray.push(data[i].disable_features)
        }
        const diableList = disableArray.filter((ele, index) => {
          return disableArray.indexOf(ele) === index;
        });
         console.log(diableList);
         diableList.forEach((val)=>{
        document.getElementById('list-premium').innerHTML +=` <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp;${val}</label>`;
       }) 
        premium.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'

      })
    //fetch special data
    fetch('http://localhost/Pricing_plan/api/readspecial.php')
      .then(response => response.json())
      .then(data => {
        // console.log(data)
        let enableArray = []
        for (let i = 0; i < data.length; i++) {
          enableArray.push(data[i].enable_features)
          
        }
        const enableList = enableArray.filter((ele, index) => {
          return enableArray.indexOf(ele) === index;
        });
        console.log(enableList);
        
       enableList.forEach((val)=>{
        document.getElementById('list-special').innerHTML +=` <label class="list-container" id="bandwidth"><i class="fa-solid fa-check item-checked icn"></i>&nbsp;${val}</label>`;
       }) 
           
        let disableArray = []
        for(let i=0;i<data.length;i++){
          disableArray.push(data[i].disable_features)
        }
        const diableList = disableArray.filter((ele, index) => {
          return disableArray.indexOf(ele) === index;
        });
         console.log(diableList);
       
    
       if(diableList.length>1){
        diableList.forEach((val)=>{
        document.getElementById('list-special').innerHTML +=` <label class="list-container"><i class="fa-solid fa-xmark item-notchecked icn"></i>&nbsp;${val}</label>`;
       }) 
       }
    
         
        
        special.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })

   }
   fetchMonthly()
   
  
    monthly.onclick = () => {
      fetch('http://localhost/Pricing_plan/api/readbasic.php')
      .then(response => response.json())
      .then(data => {
        basic.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })

      fetch('http://localhost/Pricing_plan/api/readdatastandard.php')
      .then(response => response.json())
      .then(data => {
        standard.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })
      fetch('http://localhost/Pricing_plan/api/readpremium.php')
      .then(response => response.json())
      .then(data => {
        premium.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })
      fetch('http://localhost/Pricing_plan/api/readspecial.php')
      .then(response => response.json())
      .then(data => { 
        special.innerHTML = '$' + data[data.length - 1].total_amt + '/mon'
      })
      monthly.style.backgroundColor = '#317bb8';
      monthly.style.color = 'white'
      yearly.style.backgroundColor = 'white';
      yearly.style.color = 'black'
    }

    yearly.onclick = () => {

      fetch('http://localhost/Pricing_plan/api/readbasic-year.php')
        .then(response => response.json())
        .then(data => {
          // console.log(data)
          basic.innerHTML = '$' + data[data.length - 1].total_amt + '/year'
        })

      fetch('http://localhost/Pricing_plan/api/readstandard-year.php')
        .then(response => response.json())
        .then(data => {
          // console.log(data)
          console.log(data.length)
          standard.innerHTML = '$' + data[data.length - 1].total_amt + '/year'
        })

      fetch('http://localhost/Pricing_plan/api/readpremium-year.php')
        .then(response => response.json())
        .then(data => {
          // console.log(data)
          premium.innerHTML = '$' + data[data.length - 1].total_amt + '/year'
        })

      fetch('http://localhost/Pricing_plan/api/readspecial-year.php')
        .then(response => response.json())
        .then(data => {
          // console.log(data)
          special.innerHTML = '$' + data[data.length - 1].total_amt + '/year'
        })

      yearly.style.backgroundColor = '#317bb8';
      yearly.style.color = 'white'
      monthly.style.backgroundColor = 'white';
      monthly.style.color = 'black';
      document.getElementById('buy_btn1').href = "paymentYearly.html"
      document.getElementById('buy_btn2').href = "paymentYearly.html"
      document.getElementById('buy_btn3').href = "paymentYearly.html"
      document.getElementById('buy_btn4').href = "paymentYearly.html"
    }
  </script>
</body>

</html>