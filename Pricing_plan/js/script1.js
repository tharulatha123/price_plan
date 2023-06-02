let basic = document.getElementById("basic-price");
let standard = document.getElementById("standard-price");
let premium = document.getElementById("premium-price");
let special = document.getElementById("special-price");
let yearly = document.getElementById("yearly");
let monthly = document.getElementById("monthly");

yearly.onclick = () => {
    basic.innerHTML = '$9.99/year';
    standard.innerHTML = '$14.99/year'
    premium.innerHTML = '$99.99/year'
    special.innerHTML = '$199.99/year'
    yearly.style.backgroundColor = '#317bb8';
    yearly.style.color = 'white'
    monthly.style.backgroundColor = 'white';
    monthly.style.color = 'black'
}

monthly.onclick = () => {
    basic.innerHTML = '$4.99/mon';
    standard.innerHTML = '$9.99/mon'
    premium.innerHTML = '$14.99/mon'
    special.innerHTML = '$99.99/mon'
    monthly.style.backgroundColor = '#317bb8';
    monthly.style.color = 'white'
    yearly.style.backgroundColor = 'white';
    yearly.style.color = 'black'
    
}