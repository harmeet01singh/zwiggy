<?php 

$title="Cart";
$css = '<link rel="stylesheet" href="../Css/cart.css"/>';
include("../header.php");
$carts = $data->getData('SELECT * FROM ((orders INNER JOIN food_item ON orders.food_id=food_item.food_id )INNER JOIN hotel ON food_item.hotel_id=hotel.hotel_mail )ORDER BY order_date desc');


//  print_r($cart);

?>
            <table id="table">
                <tr>
                    
                    <th>Hotel Name</th>
                    <th>Food Item</th>
                    <th>Order Date</th>
                    <th>Order Time</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>

                </tr>
                <?php foreach($carts as $cart) { ?>
                <tr>
                
                    <td><?php echo $cart['hotel_name'] ?></td>
                    <td><?php echo $cart['food_name'] ?></td>
                    <td><?php echo $cart['order_date'] ?></td>
                    <td><?php echo $cart['order_time'] ?></td>
                    <td><?php echo $cart['quantity'] ?></td>
                    <td><?php echo $cart['total_amount'] ?></td>
                    <td><?php echo $cart['status'] ?></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>