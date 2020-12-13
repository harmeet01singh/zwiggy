<?php 


$title="order";
$css = '<link rel="stylesheet" href="../Css/cart.css"/>';
include("../header.php");
// $_SESSION['usid'] = 'itzel67@yahoo.com';
$orders = $data->getData("SELECT * FROM orders as o, food_item as f WHERE o.user_id='{$_SESSION['usid']}' AND o.food_id=f.food_id ORDER BY order_date DESC");
$reservations = $data->getData("SELECT * FROM reservations as r, reservation_tables as t WHERE r.user_id='{$_SESSION['usid']}' AND r.table_id=t.table_id ORDER BY reservation_date");

// print_r($orders);

?>
            <table class="table">
                <tr>
                    
                    <th>Food Item</th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Order Time</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>

                </tr>
                <?php foreach($orders as $order) { ?>
                <tr>
                
                    <td><?php echo $order['food_name'] ?></td>
                    <td><?php echo $order['quantity'] ?></td>
                    <td><?php echo $order['order_date'] ?></td>
                    <td><?php echo $order['order_time'] ?></td>
                    <td><?php echo $order['quantity'] ?></td>
                    <td><?php echo $order['total_amount'] ?></td>
                    <td><?php echo $order['status'] ?></td>
                </tr>
                <?php } ?>
            </table>

            <table class="table">
                <tr>
                    
                    <th>Reservation ID</th>
                    <th>No. of Persons</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>No. of hours</th>
                    <th>Amount</th>
                    <th>Status</th>

                </tr>
                <?php foreach($reservations as $reservation) { ?>
                <tr>
                
                    <td><?php echo $reservation['reservation_id'] ?></td>
                    <td><?php echo $reservation['no_of_persons'] ?></td>
                    <td><?php echo $reservation['reservation_date'] ?></td>
                    <td><?php echo $reservation['reservation_time'] ?></td>
                    <td><?php echo $reservation['no_of_hours'] ?></td>
                    <td><?php echo $reservation['total_amountt'] ?></td>
                    <td><?php echo $reservation['status'] ?></td>
                </tr>
                <?php } ?>
            </table>

</body>
</html>