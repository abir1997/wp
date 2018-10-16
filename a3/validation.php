<?php
$nameError="";
$emailError="";
$addressError="";
$phoneError="";
$cardError="";
$dateError="";

if(isset($_POST['submit']))
{
    if(empty($_POST["name"]))
    {
        $nameError = "Name needed";
    }
    else
    {
        $name =$_POST["name"];
        // Validate
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameError = "Only letters and whitespace"
        }
    }

    if(empty($_POST["email"]))
    {
        $emailError="Email needed";
    }
    else
    {
        $email = $_POST["email"];
    }

    if(empty($_POST["address"]))
    {
        $addressError="Address needed";
    }
    else
    {
        $address = $_POST["address"];
    }

    if(empty($_POST["number"]))
    {
        $phoneError = "Number needed";
    }
    else
    {
        $number = $_POST["number"];
    }

    if(empty($_POST["card"]))
    {
        $cardError = "Credit card needed";
    }
    else
    {
        $card = $_POST["card"];
    }

    if(empty($_POST["expiry"]))
    {
        $dateError = "Date needed";
    }
    else
    {
        $expiryDate = $_POST["expiry"];
    }
}

?>
