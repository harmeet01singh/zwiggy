<?php 

$title="Orders";
include("../sidebar.php");

$orders = $data->getData("SELECT * FROM orders");

?>

            <table id="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $order) { ?>
                        <tr class="rows">
                            <td><?php echo $order['order_id'] ?></td>
                            <td><?php echo $order['quantity'] ?></td>
                            <td>Rs. <?php echo $order['total_amount'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td id="pages"></td>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
    <div id="dummy"></div>

    <script src='pagination.js'></script>
</body>
</html>