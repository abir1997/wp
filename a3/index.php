<?php
 
  include_once('tools.php');

  topModule('Home');
?>
<article>
  <div class="flex-container">
    <div class="clientText">
      <h2>Harold Harrier</h2>
      <p>In the summer of 2009 all Harold wanted to do was find a shop that would sell him a hat and a cool leather
        jacket and maybe a white T-shirt to complete his badboy, hipseter look.<br><br>
        Alas his desire was not met and he could not find such a place. So, a year later he decided to get on the
        ecommerce train and open a site himself. In his own words,<span> "A good hat, Tshirt and a jacket maketh the
          man".</span>
        Now he is considered a genius in the world of fashion.<br><br>
        Read more about this incredible fashion icon <span> <a href="#about">here.</a></span></p>
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
      <p>This trendy look is sure to make heads turn.<br>
        Formal and functional.<br>
        <span> <a href="#about">Buy the look.</a></span></p>
      <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/man-wearing-brown-coat-840916/ -->
      <img src="../../media/man1.jpg">
    </div>

    <div class="trend">
      <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/men-s-wearing-black-suit-jacket-and-pants-937481/ -->
      <img src="../../media/man2.jpg">
      <h2>Grim suit</h2>
      <p>This trendy look is sure to make heads turn.<br>
        Formal and functional.<br>
        <span> <a href="#about">Buy the look.</a></span></p>
    </div>

    <div class="trend" id="trend2">
      <h2>Bearded Energy</h2>
      <p>This trendy look is sure to make heads turn.<br>
        Formal and functional.<br>
        <span> <a href="#about">Buy the look.</a></span></p>
      <!-- Original image below sourced for educational purposes: https://www.pexels.com/photo/black-haired-man-wearing-black-sunglasses-and-black-leather-jacket-157966/ -->
      <img src="../../media/man3.jpg">
    </div>

  </div><!-- End of flex-container-->
</section>

<?php
  footer();
?>
