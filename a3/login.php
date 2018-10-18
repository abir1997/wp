<?php
  session_start();
  include_once('tools.php');

  topModule('Products');
?>

<div id="log">

    <div class="flex-container">
        <div id="formContainer">
            <h1>Login</h1>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="yourName@xyz.com">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="password">
                <input type="submit" value="Submit">

            </form>
        </div>
    </div>
    <!--End of flex-->
</div>

<?php
  footer();
?>