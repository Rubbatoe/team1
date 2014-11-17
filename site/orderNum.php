<?php
    include "assets/util/functions.php";
    print_header("Order Number");
?>
    <div id="orderFormat">
        <img src="assets/images/bytes.jpg" alt="Bytes" />
        <p>Thank you for using (app name)</p><br/>
        <p>Order #: # 123435563406346923406923</p>
    </div>
    <a href="confirm.php" class="edit"><p>Edit Request</p></a>
    <a href="order.php" class="make"><p>Make New Request</p></a>
<?php print_footer(); ?>