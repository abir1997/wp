<?php
 session_start();
  include_once('tools.php');

  topModule('Checkout');
?>

<?php
$nameError="";
$emailError="";
$addressError="";
$phoneError="";
$cardError="";
$expiryError="";
$isError= false;
if(isset($_POST["validate"]))
{
  
  $name=$_POST["name"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $phone=$_POST["number"];
  $cardno=$_POST["card"];
  $expiry=$_POST["expiry"];
  echo $name.$email.$address.$phone.$cardno.$expiry;
  if($name=="")
  {
    $isError= true;
    $nameError="Name cant be left blank";
  } 
  else if( !preg_match("/^[a-zA-Z ,'-\.]+$/",$_POST["name"]))
  {
    $isError= true;
    $nameError="Invalid characters in name";
  }

  if($email=="")
  {
    $isError= true;
    $emailError="Email cant be left blank";
  } 
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $isError= true;
    $emailError="Invalid characters in email id";
  }
  
  if($address=="")
  {
    $isError= true;
    $addressError="Address cant be left blank";
  } 
  else if( !preg_match("#^[a-zA-Z0-9 ,'-\./]+$#",$_POST["address"]))
  {
    $isError= true;
    $addressError="Invalid Value for Address";
  }

  if($phone=="")
  {
    $isError= true;
    $phoneError="Phone Number cant be left blank";
  } 
  else if(!preg_match("/^(\+614|04|\(04\))[0-9]{8}$/",$phone))
  {
    $isError= true;
    $phoneError="Invalid Phone number";
  }
 if($cardno=="")
  {
    $isError= true;
    $cardError="Card no. cant be left blank";
  } 
  else if( !preg_match("/^[0-9 ]{12,19}$/",$cardno))
  {
    $isError= true;
    $cardError="Invalid card number";
  }
  if($expiry=="")
  {
    $isError= true;
    $expiryError="Expiry cant be left blank";
  } 
  else 
  {
    //Echo "<BR>".$_POST["date"];
			$date = date_create($expiry);
			$dateNow = date_create('now');
		/*	$dateNow->setTime(0, 0);
			//echo "<BR>".$date->format('Y-m-d H:i:s');
			//echo "<BR>".$dateNow->format('Y-m-d H:i:s');
			$diff=date_diff($dateNow,$date);
			//echo "<BR>".$diff->format("%R%a");
			if ($diff->format("%R%a") < 28) {
        $expiryError = "Please enter a valid expiry date.";
        */
      }
  if($isError==false)
  { // If there are no errors proceed to receipt page.
      $_SESSION["cname"]=$name;
      $_SESSION["address"]=$address;
      $_SESSION["phone"]=$phone;
      $_SESSION["email"]=$email;
       header('Location: receipt.php');
  }
}

?>
<div id="log">
<div class="flex-container">

    <div id="formContainer">
        <h1>Checkout</h1>
        <form action = "checkout.php" method="POST">
        <input type="hidden" value="1" name="validate">
        <label for="name">Name</label>
        <span class="error">* <?php echo $nameError;?></span>
        <input type="text" id="name" name="name" placeholder="Jon Doe">
        <span class="error">* <?php echo $emailError;?></span>
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="yourName@xyz.com">
        <span class="error">* <?php echo $addressError;?></span>
        <label for="address">Address</label><br>
        <textarea rows="4" cols="100" name="address" placeholder="44 street name,Suburb,State,Country"></textarea>
        <span class="error">* <?php echo $phoneError;?></span>
        <label for="number">Phone number</label>
        <input type="text" id="number" name="number" placeholder="+614XXXXXXXX">
        <span class="error">* <?php echo $cardError;?></span>
        <label for="card">Credit Card</label>
        <img src="../../media/visa.png" id="visaLogo">
        <input oninput="showVisa();" type="text" id="card" name="card" placeholder="1234-5678-9101"> <!--Show visa logo on valid visa card input-->
        <span class="error">* <?php echo $expiryError;?></span>
        <label for="expiry">Expiry date</label>
        <input type="date" id="expiry" name="expiry">
        
        <input type="submit" value="Submit">

        

        </form>
    </div>


</div> <!--End of flex cont-->
</div>

<?php
  footer();
?>