<?php
session_start();
include_once('tools.php');
$id ="";
 if (isset($_GET['id'])){
    $id =  htmlentities($_GET['id']);
   }
  

  topModule('Product');
?>
<div class="flex-container" id="big">

 <?php
 
	$filename="products.txt";
	$delimiter="\t";
	
		if(!file_exists($filename) || !is_readable($filename))
			echo "Cant open file";

    $header = NULL;
    $data = array();
    $index=0;
    $found=false;
	try{
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
          if(!$header)
			{
                $header = $row;
			}
            else
			{
				
                $data[$index] = array_combine($header, $row);
				if($data[$index]["ID"]==$id)
				{
                    $product=$data[$index];
                    $found=true;
					break;
				}
				$index = $index+1;
				
			}
			
        }
	}
	}
	catch(Exception $e)
				{
				}
        fclose($handle);
    if($found==false)
    {
        header('Location: products.php');
    }
    $_SESSION["products"] = $product;
	
?>


    <div id="picHolder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
       <img src="../../media/<?php echo $product['Img name'];?>">
    </div>

    <div class="bigText">
        <small>Product code : <?php echo $product['ID']; ?> </small>
        <h1><?php echo $product["Title"] ?></h1>
        <h2 id="price"><?php echo $product['Price'] ?></h2>AU$
        <form action="cart.php" method="post">
            <input type="hidden" id="ID" name="ID" value="<?php echo $product['ID'] ?>">
            <strong>Total Price :</strong><p id="subtotal">0<p>
            <label for="size">Size:</label><br>
            <select id="size" name="option">
                <option value="small">Small</option>
                <option value="large">Large</option>
            </select>
            <div class="quantityBox">
                <label>Quantity:</label><br>
                <input type="button" value="-" id="minus" field="quantity" onclick="minusValue()">
                <input type='number' name='qty' value='0' min=1 id='qty'>
                <input type="button" value="+" id="plus" field="quantity" onclick="plusValue()">

                <input type="submit" value="Add to Bag" onclick="check()">
            </div>
        </form>
        <p><?php echo $product['Description']; ?></p>
    </div>

</div>

<!--End of flex-container-->

<?php
  footer();
  
?>