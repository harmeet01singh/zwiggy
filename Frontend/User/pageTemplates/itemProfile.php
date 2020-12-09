<?php
    $title = 'Item Name';
    $css = '<link rel="stylesheet" href="../Css/itemProfile.css">';
    include('../header.php');

    if(isset($_GET['fid'])){
        $query = "SELECT * FROM food_item WHERE food_id='{$_GET['fid']}'";
        $item = $data->getData($query);
        $reviews = $data->getData("SELECT * FROM review WHERE food_id='{$_GET['fid']}'");
        // print_r($item);
    }
?>
    <div class="container">
        <img src="http://localhost/zwiggy/Frontend/User/images/itemImage.jpg" alt="item image" class="image">
        <div class="info">
            <div>
                <h3>Info</h3>
                <p><?php echo $item[0]['food_description'] ?></p>
            </div>
            <div>
                <h3>Price: <?php echo $item[0]['food_price'] ?></h3>
            </div>
        </div>
        <div class="reviews">
            <div>
                <h3>Reviews</h3>
                <?php foreach($reviews as $review) { ?>
                    <h4>Rating: <?php echo $review['ratings'] ?></h4>
                    <p><?php echo $review['food_review'] ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>