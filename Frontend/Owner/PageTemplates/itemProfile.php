<?php
    require('../../../function.php');

    if(isset($_GET['fid'])){
        $query = "SELECT f.*, h.hotel_name, c.category_name FROM food_item as f, hotel as h, categories as c WHERE food_id='{$_GET['fid']}' AND h.hotel_mail=f.hotel_id AND c.category_id=f.category_id";
        $item = $data->getData($query);
        $reviews = $data->getData("SELECT * FROM review WHERE food_id='{$_GET['fid']}'");
        // print_r($item);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./itemProfile.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="../../upload/items/itemImage.jpg" alt="item image" class="image">
        <div class="info">
            <div class="order">
                <h3>Offer: <?php echo $item[0]['offer'] ?>%</h3>
                <button onclick="document.getElementById('modal').style.display='block'">Order</button>
            </div>
            <h2>Name: <?php echo $item[0]['food_name'] ?></h2>
            <h3>Hotel: <?php echo $item[0]['hotel_name'] ?></h3>
            <h3>Category: <?php echo $item[0]['category_name'] ?></h3>
            <p><strong>Description: </strong><?php echo $item[0]['food_description'] ?></p>
            <h3>Price: <?php echo $item[0]['food_price'] ?></h3>
            <h3>Rating: <?php echo $item[0]['food_rating'] ?></h3>
        </div>
        <div class="reviews" style="display: flex; flex-direction: row">
            <div class="commentdiv" style="flex: 45%">
                <h3>Comment on your food</h3>
                <form action="" class="comment" method="POST">
                    <label for="rating">Your Rating</label>
                    <select required name="rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br>
                    <textarea required name="msg" id="msg" cols="30" rows="5" placeholder="Write your comment here..."></textarea><br>
                    <button type="submit">Submit Comment</button><br>
                </form>
            </div>
            <div style="flex: 55%">
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