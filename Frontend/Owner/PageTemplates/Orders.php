<?php 

$title="Orders";
include("../sidebar.php");

$orders = $data->query('SELECT * FROM ((orders INNER JOIN user ON orders.user_id=user.user_id) INNER JOIN food_item ON Food_item.food_id = orders.food_id)');

// print_r($items);

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
                    <td><?php echo $order['food_name'] ?></td>
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



