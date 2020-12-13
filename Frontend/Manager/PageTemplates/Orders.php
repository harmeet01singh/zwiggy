<?php 

session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="Orders";
include("../sidebar.php");

// $orders = $data->getData("");

$orders = $data->getData("SELECT orders.*, user.username, user.contact FROM orders, user WHERE orders.user_id = user.user_id AND orders.food_id IN (SELECT food_id FROM food_item, hotel as h WHERE food_item.hotel_id=h.hotel_mail AND h.hotel_mail = '{$_SESSION['cor_hotel_id']}')");

if(isset($_POST['id'])){
    
    $s = $data->updateData("UPDATE `orders` SET `status`='{$_POST['stat']}' WHERE `order_id`={$_POST['id']} ");
    if($s){
        echo $s;
    }
}

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
                    <th>Payment Mode</th>
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
                    <td><form method="POST" action="">
                            <input type="text" name="id" style="display: none;" value="<?php echo $order['order_id'] ?>">
                            <select id="mySelect" name="stat">
                                <option value="P">Order Placed(P)</option>
                                <option value="C">Canceled(C)</option>
                                <option value="D">Dispatched(D)</option>
                                <option value="S">Delivered(S)</option>
                            </select>
                            <button type="submit" class="update">Update</button>
                        </form>
                    </td>
                    
                </tr>
                <?php } ?>
            </table>
            
            

        </div>
    </div>

   

</body>
</html>



