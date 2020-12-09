<?php 

session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="Orders";
include("../sidebar.php");

// $orders = $data->getData("");

$orders = $data->getData("SELECT orders.*, user.username, user.contact FROM orders, user WHERE orders.user_id = user.user_id AND orders.food_id IN (SELECT food_id FROM food_item, hotel as h WHERE food_item.hotel_id=h.hotel_mail AND h.hotel_mail = '{$_SESSION['cor_hotel_id']}')");

// $orders = $data->getData("");
// print_r($orders);

?>
            <table id="table">
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Food Item</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Delivery Mode</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php foreach($orders as $order) { ?>
                <tr>
                    <td><?php echo $order['order_id'] ?></td>
                    <td><?php echo $order['username'] ?></td>
                    <td><?php echo $order['user_id'] ?></td>
                    <td><?php echo $order['contact'] ?></td>
                    <td><?php echo $order['food_id'] ?></td>
                    <td><?php echo $order['quantity'] ?></td>
                    <td><?php echo $order['total_amount'] ?></td>
                    <td><?php echo $order['payment_method'] ?></td>
                    <td><?php echo $order['status'] ?></td>
                    <td><form>
  
                            <select id="mySelect">
                            <option value="dd1">Order Placed</option>
                            <option value="dd2">Canceled</option>
                            <option value="dd3">Dispatched</option>
                            <option value="dd4">Delivered</option>
                            </select>
                        </form>
                    </td>
                    
                </tr>
                <?php } ?>
            </table>
            
            

        </div>
    </div>

   

</body>
</html>



