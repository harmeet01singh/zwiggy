<?php 

$title="Orders";
include("../sidebar.php")

$orders = $data->query('SELECT * FROM orders');

// print_r($items);

?>
            <table id="table">
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Status</th>
                    <th>Delivery Mode</th>
                    <th>Action</th>
                </tr>
                <?php foreach($orders as $order) { ?>
                <tr>
                    <td><?php echo $order['order_id'] ?></td>
                    <td><?php echo $order['user_name'] ?></td>
                    <td><?php echo $order['user_id'] ?></td>
                    <td><?php echo $order[''] ?></td>
                    <td><?php echo $order['food_description'] ?></td>
                    <td><button>Edit</button></td>
                    <td><button>Remove</button></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>



