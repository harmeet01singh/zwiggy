<?php 

$title="MenuItems";
include("../sidebar.php");
$items = $data->query('SELECT * FROM food_item');

// print_r($items);

?>
            <table id="table">
                <tr>
                    <th>Food Name</th>
                    <th>Food Image</th>
                    <th>Food Price</th>
                    <th>Offer</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                <?php foreach($items as $item) { ?>
                <tr>
                    <td><?php echo $item['food_name'] ?></td>
                    <td><?php echo $item['food_image'] ?></td>
                    <td><?php echo $item['food_price'] ?></td>
                    <td><?php echo $item['offer'] ?></td>
                    <td><?php echo $item['food_description'] ?></td>
                    <td><button>Edit</button></td>
                    <td><button>Remove</button></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>



