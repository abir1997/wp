<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

  <!-- Font awesome integration-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

  <script src='../wireframe.js'></script>
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
        <img src="../../media/clLogo.jpg">
      </div>

      <div class="acc">

        <a href="#cart"><i class="fa fa-shopping-bag"></i> Your Bag</a>
      </div>

    </div> <!-- End of flex-container-->
  </header>

  <nav>
    <div class="topnav" id="myTopnav">
      <div class="navContent">
        <a href="index.php">Home</a>
        <div class="dropdown">
          <button class="dropbtn">Clothing

          </button>

          <div class="dropdown-content">
            <a href="assets/products.php">Tshirts</a>
            <a href="assets/products.php">Jackets</a>
          </div>
        </div>
        <!--End of dropdown class-->

        <div class="dropdown">
          <button class="dropbtn">Accessories

          </button>

          <div class="dropdown-content">
            <a href="assets/products.php">Hats</a>
            <a href="#">Wallets</a>
          </div>
        </div>
        <!--End of dropdown class-->
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>

        <a href="assets/login.php"><i class="fa fa-user-circle"></i> Account</a>
      </div>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
  </nav>

  <main>
    <article>
      <div class="flex-container">
        <div class="clientText">
          <h2>Harold Harrier</h2>
          <p>In the summer of 2009 all Harold wanted to do was find a shop that would sell him a hat and a cool leather jacket
            and maybe a white T-shirt to complete his badboy, hipseter look.<br><br> Alas his desire was not met and he could
            not find such a place. So, a year later he decided to get on the ecommerce train and open a site himself. In
            his own words,<span> "A good hat, Tshirt and a jacket maketh the man".</span>
            Now he is considered a genius in the world of fashion.<br><br> Read more about this incredible fashion icon <span>
            <a href="#about">here.</a></span></p>
        </div>

        <div class="clientImg">
          <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-brown-fedora-hat-photo-211048/ -->
          <img src="../../media/client.jpg" alt="man">
        </div>
      </div><!-- End of flex container-->
    </article>
    <br>

    <section>
      <h1>Trending Now</h1>
      <hr id="red"><br>
      <div class="flex-container">
        <div class="trend" id="trend1">
          <h2>Summertime sadness</h2>
          <p>This trendy look is sure to make heads turn.<br> Formal and functional.<br>
            <span> <a href="#about">Buy the look.</a></span></p>
          <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-brown-coat-840916/ -->
          <img src="../../media/man1.jpg">
        </div>

        <div class="trend">
          <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/men-s-wearing-black-suit-jacket-and-pants-937481/ -->
          <img src="../../media/man2.jpg">
          <h2>Grim suit</h2>
          <p>This trendy look is sure to make heads turn.<br> Formal and functional.<br>
            <span> <a href="#about">Buy the look.</a></span></p>
        </div>

        <div class="trend" id="trend2">
          <h2>Bearded Energy</h2>
          <p>This trendy look is sure to make heads turn.<br> Formal and functional.<br>
            <span> <a href="#about">Buy the look.</a></span></p>
          <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
          <img src="../../media/man3.jpg">
        </div>

      </div><!-- End of flex-container-->
    </section>
  </main>

  <br>
  <footer>
    <div class="flex-container">

      <div class="sign">
        <ul>
          <li><a href="www.facebook.com"><i class="fa fa-facebook-f"></i> &nbsp;&nbsp;Facebook</a></li>
          <li><a href="www.facebook.com"><i class="fa fa-instagram"></i> &nbsp;&nbsp;Instagram</a></li>
          <li><a href="www.facebook.com"><i class="fa fa-twitter"></i> &nbsp;&nbsp;Twitter</a></li>
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
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> &nbsp; Md Abir Ishtiaque s3677701
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming
      course at RMIT University in Melbourne, Australia.</div>
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