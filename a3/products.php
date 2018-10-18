<?php
  session_start();
  include_once('tools.php');

  topModule('Products');
?>

<div class="container">

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
        <a href="product.php?id=p01"><img src="../../media/jacket1.jpg"></a><br>
        <div class="info">
            <p>Armani</p>
            <a href="#">Swede leather</a><br>
            <p>$79.99</p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
        <a href="product.php?id=p02"><img src="../../media/jacket2.jpg"></a><br>
        <div class="info">
            <p>Gucci</p>
            <a href="#">Gucci Jacket</a><br>
            <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
        <a href="product.php?id=p03"><img src="../../media/jacket3.jpg"></a><br>
        <div class="info">
            <p>Nike</p>
            <a href="#">Yellow Jacket</a>
            <p>$89.99</p>
        </div>
    </div>


</div>
<!--End of container-->
<div class="container">

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
        <a href="#"><img src="../../media/man3.jpg"></a><br>
        <div class="info">
            <p>Armani</p>
            <a href="#">White shirt</a><br>
            <p>$79.99</p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/adult-dark-facial-expression-fashion-428340/ -->
        <a href="#"><img src="../../media/tshirt2.jpg"></a><br>
        <div class="info">
            <p>Gucci</p>
            <a href="#">Another shirt</a><br>
            <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-gray-crew-neck-t-shirt-leaning-on-gray-wall-958960/ -->
        <a href="#"><img src="../../media/tshirt3.jpg"></a><br>
        <div class="info">
            <p>Nike</p>
            <a href="#">Greyish shirt</a>
            <p>$89.99</p>
        </div>
    </div>


</div>
<!--End of container-->

<div class="container">

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/sea-fashion-beach-sand-33622/ -->
        <a href="#"><img src="../../media/hat1.jpg"></a><br>
        <div class="info">
            <p>Armani</p>
            <a href="#">Blue hat</a><br>
            <p>$79.99</p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/fashion-hat-8333/ -->
        <a href="#"><img src="../../media/hat2s.jpg"></a><br>
        <div class="info">
            <p>Gucci</p>
            <a href="#">Brown hat</a><br>
            <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
        </div>
    </div>

    <div class="holder">
        <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-brown-dress-shirt-holding-white-fedora-hat-1036627/ -->
        <a href="#"><img src="../../media/hat3.jpg"></a><br>
        <div class="info">
            <p>Nike</p>
            <a href="#">Brownish hat</a>
            <p>$89.99</p>
        </div>
    </div>


</div>
<!--End of container-->

<?php
  footer();
  ?>