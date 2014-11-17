<?php
    include "assets/util/functions.php";
    print_header("Payment");
?>

    <div id="loginFormat">
        <a href="cart.php" class="backC"><p>Back to Cart</p></a>
        <div id="forms">
            <span>RIT Username:</span>
            <input type="text" id="username" name="username" max-length="7" size="20" required="required" />
            <br/>
            <span>Password:</span>
            <input type="password" id="pwd" name="pwd" required="required" />
            <br/>
        </div>
        <a href="cart.php" class="proceed"><p>Proceed</p></a>
    </div>

<?php print_footer(); ?>