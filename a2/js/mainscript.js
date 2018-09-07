// Quantity box in product.php
var value = parseInt(document.getElementById("qty").value);
function plusValue() {
    value = isNaN(value) ? 0 : value;
    value++
    document.getElementById("qty").value = value;
}

function minusValue() {
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : "";
    value--;
    document.getElementById("qty").value = value;
}

function check() {
    if (value <= 0) {
        window.event.preventDefault();
    }
}

//navbar
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}