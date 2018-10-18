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
    //$qty=$_POST["qty"];
    echo "SET";
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
  echo "asd";
//print_r($_SESSION['cart']);
$totalItems = 0;
if(isset($_SESSION['cart']))
echo "<Table border=1 align=center width=60%><tr><th>ID</th><th>OID</th><th>Title</th><th>Quantity</th><th>Price</th></tr>";
  foreach($_SESSION['cart'] as $item)
  {
    echo "<tr>";
  echo "<td>".$item["ID"]."</td>";
  echo "<td>".$item["OID"]."</td>";
  echo "<td>".$item["Title"]."</td>";
    echo "<td>".$item["Qty"]."</td>";
  echo "<td>". $item["Price"]."</td>";
  $totalItems++;
  //print_r($item["OID"]);
  //print_r($item["Title"]);
    echo "</tr>";
  }
  echo "</table>";
echo "<h3>No. of Items in Cart $totalItems</h3>";
?>
 <a href="cart.php?clearAll=true">Clear All</a> 
</table>
<form method=post action=checkout.php>
<input type=submit value="CheckOut">
</form>
  </div> <!--End of bag-->


<?php
  footer();
  ?>