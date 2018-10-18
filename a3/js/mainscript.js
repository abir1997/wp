// Quantity box in product.php
var value = parseInt(document.getElementById("qty").value);
var unitPrice = parseInt(document.getElementById("price").value)
function plusValue() {
    value = isNaN(value) ? 0 : value;
    value++
    document.getElementById("qty").value = value;
    updatePrice();


}

function minusValue() {
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : "";
    value--;
    document.getElementById("qty").value = value;

   updatePrice();


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

function showVisa()
{
    var value = document.getElementById('card').value;
	value = value.replace(/ /g,'');
	var pattern = new RegExp("^4[0-9]{12,15}$");
	var result = pattern.test(value);
	if(result==true) {
		document.getElementById('visaLogo').style.visibility = "visible";
	}
	else {
		document.getElementById('visaLogo').style.visibility = "hidden";
	}
}

function updatePrice() {

    var qty=document.getElementById("qty").value;
	
	var price =document.getElementById("price").innerHTML;
	var subtotal=qty*price;
	
	 document.getElementById("subtotal").innerHTML ="$"+subtotal.toFixed(2);
}

