<?php
 
  include_once('tools.php');

  topModule('Checkout');
?>

<div id="log">
<div class="flex-container">

    <div id="formContainer">
        <h1>Checkout</h1>
        <form action = "validation.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Jon Doe">
        <span class="error">* <?php echo $nameError;?></span>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="yourName@xyz.com">
        <label for="address">Address</label><br>
        <textarea rows="4" cols="100" name="address" placeholder="44 street name,Suburb,State,Country"></textarea>
        <label for="number">Phone number</label>
        <input type="text" id="number" name="number" placeholder="+614XXXXXXXX">
        <label for="card">Credit Card</label>
        <input type="text" id="card" name="card" placeholder="1234-5678-9101">
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