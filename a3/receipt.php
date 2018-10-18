<?php
    session_start();
  include_once('tools.php');

  topModule('receipt');
?>
<?php
    echo "<h2 class='text-center'>Order Complete. You will receiver your items soon.Thank you for shopping with CottonLab.</h2>";
    if(isset($_SESSION['cart']))
    {
        $ordersFile = fopen("orders.txt", "a") or die("Unable to open file!");
        echo "<table class='rTable' align=center width=60%>
        <tr>
        <th>OrderDate</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>ID</th>
        <th>OID</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
        </tr>";
        foreach($_SESSION['cart'] as $item)
        {
            echo "<tr>";
            $dateNow = date_create('now');
            $final_order["cdate"]=$dateNow->format('Y-m-d');
            $final_order["cname"]=$_SESSION["cname"];
            $final_order["email"]=$_SESSION["email"];
            $final_order["phone"]=$_SESSION["phone"];
            $final_order["address"]=$_SESSION["address"];
            $final_order["ID"]=$item["ID"];
            $final_order["OID"]=$item["OID"];
            $final_order["Qty"]=$item["Qty"];
            $final_order["Price"]=$item["Price"];
            $subtotal=$item["Qty"] * $item["Price"];
            $final_order["Subtotal"]=$subtotal;
			echo "<td>".$dateNow->format('Y-m-d')."</td>";
			
            echo "<td>". $_SESSION["cname"]."</td>";
            echo "<td>". $_SESSION["address"]."</td>";
            echo "<td>". $_SESSION["phone"]."</td>";
            echo "<td>". $_SESSION["email"]."</td>";
            echo "<td>".$item["ID"]."</td>";
            echo "<td>".$item["OID"]."</td>";
            echo "<td>".$item["Qty"]."</td>";
            echo "<td>". $item["Price"]."</td>";
            echo "<td>". $subtotal ."</td>";
            echo "</tr>";
              fputcsv($ordersFile, $final_order, "\t");   
        }
        echo "</table>";
    }

    unset($_SESSION['cart']);
    footer();
?>