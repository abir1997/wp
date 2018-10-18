<?php
  session_start();
  include_once('tools.php');

  topModule('Cart');
?>
<?php
  $products = $_SESSION["products"];

  if(isset($_POST["ID"]))
  {
    $products["Qty"]=$_POST["qty"];
    $_SESSION['cart'][]=$products;
  }else if(isset($_GET['clearAll']) && $_GET['clearAll']=='true')
  {
    unset($_SESSION['cart']);
    
    header('Location: products.php');
  }else{
    echo "nothing";
  }
?>

<div class="bag">
<h1> Your bag </h1>

<table>
  <?php

$totalItems = 0;
$totalPrice = 0;
if(isset($_SESSION['cart']))
echo "<table class='cartTable' align=center width=60%>
<tr>
<th>Image</th>
<th>ID</th>
<th>OID</th>
<th>Title</th>
<th>Quantity</th>
<th>Price</th>
<th>Sub-total</th>
</tr>";
  foreach($_SESSION['cart'] as $item)
  {
    echo "<tr>";
  echo "<td><img src=../../media/".$item["Img name"]."></td>";
  echo "<td>".$item["ID"]."</td>";
  echo "<td>".$item["OID"]."</td>";
  echo "<td>".$item["Title"]."</td>";
  echo "<td>".$item["Qty"]."</td>";
  echo "<td>". $item["Price"]."</td>";
  echo "<td>". $item["Price"]*$item["Qty"]."</td>";
  $totalPrice += $item["Price"]*$item["Qty"];
  $totalItems++;
    echo "</tr>";
  }
  echo "</table>";
echo "<h3>Number of Items in your bag: $totalItems,<br>and total price: $$totalPrice</h3>";
?>
 

</table><hr>
<form method=post action=checkout.php>
<input id="cartSub" type=submit value="CheckOut">
<button id="clr"><a href="cart.php?clearAll=true">Clear All</a></button>
</form>
  </div> <!--End of bag-->


<?php
  footer();
  ?>