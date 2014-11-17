<?php
    include "assets/util/functions.php";
    print_header("Order");
    ini_set('display_errors', 'On');
?>
    <div id="tableFormat">
        <a href="index.php" class="back"><p>Back Home</p></a>
        <a href="payment.php" class="forward"><p>Checkout</p></a>
        <form>
        <table>
            <tr>
                <col width="50%" />
                <col width="15%" />
                <col width="12%" />
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>

            <?php
                generate_items(generate_item_data());
            ?>
        </table>
        </form>
    </div>
<?php print_footer(); ?>