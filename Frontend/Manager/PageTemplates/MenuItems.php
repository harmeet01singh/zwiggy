<?php 

session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="MenuItems";
include("../sidebar.php");
$items = $data->getData("SELECT * FROM food_item WHERE hotel_id='{$_SESSION['cor_hotel_id']}'");

// print_r($items);

?>
            <table id="table">
                <tr>
                    <th>Food Name</th>
                    <th>Food Image</th>
                    <th>Food Price</th>
                    <th>Offer</th>
                    <th>Description</th>
                </tr>
                <?php foreach($items as $item) { ?>
                <tr>
                    <td><?php echo $item['food_name'] ?></td>
                    <td><?php echo $item['food_image'] ?></td>
                    <td><?php echo $item['food_price'] ?></td>
                    <td><?php echo $item['offer'] ?></td>
                    <td><?php echo $item['food_description'] ?></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>



