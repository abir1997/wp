<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../../wireframe.css" disabled>

    <!-- Font awesome integration-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link id='stylecss' type="text/css" rel="stylesheet" href="../css/style.CSS">

    <script src='../../wireframe.js'></script>
    <script src="../js/mainscript.js"></script>
</head>

<body>

    <header>
        <div class="flex-container">

            <div class="search">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="logo">
                <img src="../../../media/clLogo.jpg">
            </div>

            <div class="acc">

                <a href="#cart"><i class="fa fa-shopping-bag"></i> Your Bag</a>
            </div>

        </div> <!-- End of flex-container-->
    </header>

    <nav>
        <div class="topnav" id="myTopnav">
            <div class="navContent">
                <a href="../index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Clothing

                    </button>

                    <div class="dropdown-content">
                        <a href="products.php">Tshirts</a>
                        <a href="products.php">Jackets</a>
                    </div>
                </div>
                <!--End of dropdown class-->

                <div class="dropdown">
                    <button class="dropbtn">Accessories

                    </button>

                    <div class="dropdown-content">
                        <a href="products.php">Hats</a>
                        <a href="#">Wallets</a>
                    </div>
                </div>
                <!--End of dropdown class-->
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>

                <a href="login.php"><i class="fa fa-user-circle"></i> Account</a>
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>

    <main>
        <div class="container">

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
                <a href="product.php"><img src="../../../media/jacket1.jpg"></a><br>
                <div class="info">
                    <p>Armani</p>
                    <a href="#">Swede leather</a><br>
                    <p>$79.99</p>
                </div>
            </div>

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
                <a href="#"><img src="../../../media/jacket2.jpg"></a><br>
                <div class="info">
                    <p>Gucci</p>
                    <a href="#">Gucci Jacket</a><br>
                    <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
                </div>
            </div>

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
                <a href="#"><img src="../../../media/jacket3.jpg"></a><br>
                <div class="info">
                    <p>Nike</p>
                    <a href="#">Yellow Jacket</a>
                    <p>$89.99</p>
                </div>
            </div>


        </div><!--End of container-->
        <div class="container">

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
                <a href="#"><img src="../../../media/man3.jpg"></a><br>
                <div class="info">
                    <p>Armani</p>
                    <a href="#">White shirt</a><br>
                    <p>$79.99</p>
                </div>
            </div>

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/adult-dark-facial-expression-fashion-428340/ -->
                <a href="#"><img src="../../../media/tshirt2.jpg"></a><br>
                <div class="info">
                    <p>Gucci</p>
                    <a href="#">Another shirt</a><br>
                    <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
                </div>
            </div>

            <div class="holder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-gray-crew-neck-t-shirt-leaning-on-gray-wall-958960/ -->
                <a href="#"><img src="../../../media/tshirt3.jpg"></a><br>
                <div class="info">
                    <p>Nike</p>
                    <a href="#">Greyish shirt</a>
                    <p>$89.99</p>
                </div>
            </div>


        </div><!--End of container-->

        <div class="container">

<div class="holder">
     <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/sea-fashion-beach-sand-33622/ -->
    <a href="#"><img src="../../../media/hat1.jpg"></a><br>
    <div class="info">
        <p>Armani</p>
        <a href="#">Blue hat</a><br>
        <p>$79.99</p>
    </div>
</div>

<div class="holder">
    <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/fashion-hat-8333/ -->
    <a href="#"><img src="../../../media/hat2s.jpg"></a><br>
    <div class="info">
        <p>Gucci</p>
        <a href="#">Brown hat</a><br>
        <p><span>$55.25</span>&nbsp; &nbsp;<strike>$99.25</strike></p>
    </div>
</div>

<div class="holder">
    <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-brown-dress-shirt-holding-white-fedora-hat-1036627/ --> 
    <a href="#"><img src="../../../media/hat3.jpg"></a><br>
    <div class="info">
        <p>Nike</p>
        <a href="#">Brownish hat</a>
        <p>$89.99</p>
    </div>
</div>


</div><!--End of container-->
    </main>

    <br>
    <footer>
    <div class="flex-container">

<div class="sign">
  <ul>
    <li><a href="#"><i class="fa fa-facebook-f"></i> &nbsp;&nbsp;Facebook</a></li>
    <li><a href="#"><i class="fa fa-instagram"></i> &nbsp;&nbsp;Instagram</a></li>
    <li><a href="#"><i class="fa fa-twitter"></i> &nbsp;&nbsp;Twitter</a></li>
  </ul>
</div>

<div class="jobs">
  <ul>
    <li><a href="#">Careers</li></a>
    <li><a href="#">Contact us</li></a>
    <li><a href="#">Payment & Delivery</li></a>
  </ul>
</div>

<div class="third">
  <ul>
    <li><a href="#">Stores and hours</li></a>
    <li><a href="#">Terms and conditions</li></a>
    <li><a href="#">Returns and exchanges</li></a>
  </ul>
</div>
</div>
<!--End of flex-container-->
        <hr>
        <div>&copy;<script>
                document.write(new Date().getFullYear());
            </script>
            &nbsp; Md Abir Ishtiaque s3677701</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
            Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>
