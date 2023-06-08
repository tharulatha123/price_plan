let prices = document.getElementById("prices");
// console.log(prices);

let discounts = document.getElementById("discounts");
// console.log(discounts);

let total = document.getElementById("total");
// console.log(total);

let diable = document.getElementById("diable");
// console.log(diable);

const calculateTotal = () => {
  let pricevalue = Number(prices.value);
  // console.log(pricevalue);

  let discountvalue = Number(discounts.value) / 100;

  let totalValue = pricevalue * discountvalue;
  let totalAmount = pricevalue - totalValue;
  // console.log(totalAmount);
  total.value = totalAmount;
};

function enableInput() {
  var container1 = document.getElementById("row1");
  var inputbox1 = document.createElement("div");
  inputbox1.classList.add("inputbox1");
  inputbox1.innerHTML =
    '<input type="text" name="enable_features[]" class="form-control enableData" id="enable" ' +
    (container1.children.length + 1) +
    '">';
  container1.appendChild(inputbox1);
}

function diableInput() {
  var container2 = document.getElementById("row2");
  var inputbox2 = document.createElement("div");
  inputbox2.classList.add("inputbox2");
  inputbox2.innerHTML =
    ' <input type="text" name="disable_features[]" class="form-control space-btwn diableData" id="diable" ' +
    (container2.children.length + 1) +
    '">';
  container2.appendChild(inputbox2);
}

let selection = document.getElementById("selection");
let rooting = document.getElementById("rooting");

let count = 0;
fetch("http://localhost/Pricing_plan/api/select-plans.php")
  .then((response) => response.json())
  .then((data) => {
    let arr = [];
    for (let i = 0; i < data.length; i++) {
      arr.push(data[i].plan_type);
    }
    arr.forEach((ele) => {
      count++;
    });
  });

selection.onclick = () => {
  if (count >= 8) {
    alert("You have entred all plans ");
    console.log("You have entred all plans ");
  } else {
    rooting.href = "pricing_plan.php";
  }
};
