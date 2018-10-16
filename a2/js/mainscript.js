// Quantity box in product.php
var value = parseInt(document.getElementById("qty").value);
<<<<<<< HEAD
function plusValue()
{
    value = isNaN(value) ? 0 : value;
    value++
    document.getElementById("qty").value=value;
}

function minusValue()
{
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : "";
    value--;
    document.getElementById("qty").value=value;
}

function check()
{
    if(value<=0)
    {
=======
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
>>>>>>> 687ec9749a18e288b8bbc35e6d5ad0597433ca9e
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