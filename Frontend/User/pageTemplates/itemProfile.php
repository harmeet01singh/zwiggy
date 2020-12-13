<?php
    $title = 'Item Name';
    $css = '<link rel="stylesheet" href="../Css/itemProfile.css">';
    include('../header.php');

    if(isset($_GET['fid'])){
        $query = "SELECT f.*, h.hotel_name, c.category_name FROM food_item as f, hotel as h, categories as c WHERE food_id='{$_GET['fid']}' AND h.hotel_mail=f.hotel_id AND c.category_id=f.category_id";
        $item = $data->getData($query);
        $reviews = $data->getData("SELECT * FROM review WHERE food_id='{$_GET['fid']}'");
        // print_r($item);
    }

    if(isset($_POST['msg'])) {
        // echo $_POST['foodid'];
        $s = $data->insertData("INSERT INTO `review` (`food_id`, `user_id`, `ratings`, `food_review`) VALUES ('{$_GET['fid']}', '{$_SESSION['usid']}' ,'{$_POST['rating']}', '{$_POST['msg']}')");

        if($s){
            echo '<script> alert("Comment added") </script>';
        }
    }
?>
    <div class="container">
        <img src="http://localhost/zwiggy/Frontend/User/images/itemImage.jpg" alt="item image" class="image">
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

    <div id="modal" class="modal">
        <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>

        <form class="modal-content" action="" method="POST">
            <!-- <div class="container"> -->
            
                <label for="foodid"><b></b>Food Id:</label>
                <input type="text" readonly="readonly" id="foodid" name="foodid" value="<?php echo $item[0]['food_id'] ?>" ><br>

                <label for="fname"><b></b>Food Name:</label>
                <input type="text" readonly="readonly" name="fname" value="<?php echo $item[0]['food_name'] ?>"><br>

                <label for="quantity">Select the quantity:</label>
                <select onChange="calam(event, <?php echo $item[0]['food_id'] ?>)" required name="quantity" id="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                </select><br>

                <label for="payment">Select the payment method:</label>
                <select required name="payment" id="payment">
                    <option value="cod">COD</option>
                    <option value="epay">E-Pay</option>
                </select><br>

                <label>Price: <p id="rate<?php echo $item[0]['food_id'] ?>"><?php echo $item[0]['food_price'] ?></p></label><br>
                <label>Total amount: <input name="amount" readonly="readonly" id="amount<?php echo $item[0]['food_id'] ?>" value="<?php echo $item[0]['food_price'] ?>"></input></label><br>

                <button type="button" onclick="document.getElementById('modal').style.display='none'" class="cancelbtn">Cancel</button>
                <input type="submit" class="signupbtn" value="Order">
            <!-- </div> -->
        </form>
    </div>

    <script>
        function calam(e, id) {
            rate = document.getElementById(`rate${id}`).innerText;
            // console.log(e.currentTarget.value, rate)
            document.getElementById(`amount${id}`).value = e.currentTarget.value * rate;
        }
    </script>
</body>
</html>