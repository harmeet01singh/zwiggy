<?php 

// $_SESSION['usid'] = 'itzel67@yahoo.com';

$title="Cart";
$css = '<link rel="stylesheet" href="../Css/cart.css"/>';
include("../header.php");
$carts = $data->getData("SELECT * FROM cart, food_item, categories WHERE cart.food_id=food_item.food_id AND cart.user_id='{$_SESSION['usid']}' AND food_item.category_id=categories.category_id");
// $carts = $data->getData("SELECT * from cart");
// print_r($carts);

?>
            <table class="table">
                <tr>
                    
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Price</th>
                    <th>Offer</th>

                </tr>
                <?php foreach($carts as $cart) { ?>
                <tr>
                
                    <td><?php echo $cart['food_name'] ?></td>
                    <td><?php echo $cart['food_price'] ?></td>
                    <td><?php echo $cart['category_name'] ?></td>
                    <td><?php echo $cart['food_rating'] ?></td>
                    <td><?php echo $cart['food_price'] ?></td>
                    <td><?php echo $cart['offer'] ?></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>