<?php
    $title = 'Menu';
    $css = '<link rel="stylesheet" href="../Css/menu.css">';
    include('../header.php');
    $items = $data->getData("SELECT * FROM food_item as f, categories as c WHERE f.category_id=c.category_id");
    $categories = $data->getData('SELECT * FROM categories');
    // print_r($categories[0]);
    if(isset($_POST['foodid'])) {
        echo $_POST['foodid'];
        $d = date("Y-m-d");
        $t = date("H:i:s");
        $s = $data->insertData("INSERT INTO `orders` (`user_id`, `food_id`, `quantity`, `order_date`, `order_time`, `payment_method`, `total_amount`) VALUES ('{$_SESSION['usid']}', '{$_POST['foodid']}' ,'{$_POST['quantity']}', '{$d}', '{$t}', '{$_POST['payment']}', '{$_POST['amount']}' )");
    
        print_r($s);        
    
        if(count($s) === 1){
            echo '<script> location.href = "./history.php" </script>';
        }    
    }
?>

    <div class="main">
        <section class="searchbar">
            <input type="text" class="search">
            <button>
                <i class="material-icons md-24">search</i>
            </button>
        </section>
        <section class="menu">
            <div class="filtermenu">
                <h4>Filters</h4>
                <?php foreach($categories as $category) { ?>
                    <label><input onClick=filter(event) class="filcat" type="checkbox" name="<?php echo $category['category_name'] ?>" value="<?php echo $category['category_name'] ?>"><?php echo $category['category_name'] ?></label><br>
                <?php } ?>
                <button onClick=reset() >Reset</button>
            </div>
            <div class="menucard">
                <?php foreach($items as $item) { ?>
                    <div class="card">
                        
                        <div class="cardimg">
                            <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?> "><img src="../../upload/items/itemImage.jpg" alt="item image" class="" onclick="document.getElementById('<?php echo $item['food_name'] ?>').style.display='block'"></a>
                        </div>
                        
                        <div class="cardcon">
                            <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?>"><h2><?php echo $item['food_name'] ?></h2></a>
                            <h4>Rs. <?php echo $item['food_price'] ?></h4>
                            <h6 class="category"><?php echo $item['category_name'] ?></h6>
                            <button onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='block'" class="order">Order</button>
                            <button onClick="addToCart('<?php echo $item['food_id'] ?>')" class="cart"><span class="material-icons">add_shopping_cart</span></button><br/>
                        </div>

                    </div>

                    <div id="<?php echo $item['food_id'] ?>" class="modal">
                        <span onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='none'" class="close" title="Close Modal">&times;</span>

                        <form class="modal-content" action="" method="POST">
                            <!-- <div class="container"> -->
                            
                                <label for="foodid"><b></b>Food Id:</label>
                                <input type="text" readonly="readonly" id="foodid" name="foodid" value="<?php echo $item['food_id'] ?>" ><br>

                                <label for="fname"><b></b>Food Name:</label>
                                <input type="text" readonly="readonly" name="fname" value="<?php echo $item['food_name'] ?>"><br>

                                <label for="quantity">Select the quantity:</label>
                                <select onChange="calam(event, <?php echo $item['food_id'] ?>)" required name="quantity" id="quantity">
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

                                <label>Price: <p id="rate<?php echo $item['food_id'] ?>"><?php echo $item['food_price'] ?></p></label><br>
                                <label>Total amount: <input name="amount" readonly="readonly" id="amount<?php echo $item['food_id'] ?>" value="<?php echo $item['food_price'] ?>"></input></label><br>

                                <button type="button" onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='none'" class="cancelbtn">Cancel</button>
                                <input type="submit" class="signupbtn" value="Order">
                            <!-- </div> -->
                        </form>
                    </div>

                <?php } ?>


            </div>
        </section>
    </div>

    <script>
        function calam(e, id) {
            rate = document.getElementById(`rate${id}`).innerText;
            // console.log(e.currentTarget.value, rate)
            document.getElementById(`amount${id}`).value = e.currentTarget.value * rate;
        }

        function addToCart(food_id){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {                     

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert(xhttp.responseText);
                }
            };
            // document.getElementsByClassName("cart");
            xhttp.open("POST", "addToCart.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`fid=${food_id}`);
        }

        function filter(e) {
            
            filters = document.getElementsByClassName('filcat')

            for(let i =0; i < filters.length; i++){
                if(filters[i]['name'] !== e.originalTarget.name){
                    filters[i].checked = false;
                }
            }

            cards = document.getElementsByClassName('card');

            cardcat = document.getElementsByClassName('category');

            for(let i =0; i < cards.length; i++){
                if(cardcat[i].innerText === e.originalTarget.name){
                    cards[i].style.display = 'block';
                }else{
                    cards[i].style.display = 'none';
                }
            }
            console.log(cardcat[0])
        }

        function reset(){
            cards = document.getElementsByClassName('card');
            for(let i =0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }

            filters = document.getElementsByClassName('filcat')

            for(let i =0; i < filters.length; i++){
                filters[i].checked = false;
            }
        }
    </script>

</body>
</html>