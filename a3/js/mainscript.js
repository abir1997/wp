// Quantity box in product.php
var value = parseInt(document.getElementById("qty").value);
var unitPrice = parseInt(document.getElementById("price").value)
function plusValue() {
    value = isNaN(value) ? 0 : value;
    value++
    document.getElementById("qty").value = value;
    updatePrice("Increment");

    // var qty = document.getElementById("qty").value;

    // var price = document.getElementById("price").innerHTML;

    // document.getElementById("subtotal").innerHTML = qty * price;

}

function minusValue() {
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : "";
    value--;
    document.getElementById("qty").value = value;

   updatePrice(decrement);


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

function updatePrice(i) {

    var element = document.getElementById("price");
    if (i === "Increment") {
        var p = parseInt(element.getAttribute("value"), 10) * value;
        element.setAttribute("value", p);
        element.innerHTML = p;
    } else {
        var p = parseInt(element.getAttribute("value"), 10) / value;
        element.setAttribute("value", p);
        element.innerHTML = p;
    }
}