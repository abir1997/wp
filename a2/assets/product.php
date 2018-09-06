<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../../wireframe.css" disabled>

    <!-- Font awesome integration-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link id='stylecss' type="text/css" rel="stylesheet" href="../css/style.css">

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
        <div class="flex-container" id="big">

            <div id="picHolder">
                <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
                <img src="../../../media/big.jpg">
            </div>

            <div class="bigText">
                <small>Product code : 02XXS1</small>
                <h1>Swede Jacket in black</h1>
                <h2>$79.99</h2>
                <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
                    <input type="hidden" id="porductID" name="id" value="02XXS1">
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
                <p>Made from unicorn flesh, this jacket provides<br>ample protection against the seasons</p>
            </div>

        </div>
        <!--End of flex-container-->
    </main>

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

</body>

</html>