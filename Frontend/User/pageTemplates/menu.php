<?php
    $title = 'Menu';
    $css = '<link rel="stylesheet" href="../Css/menu.css">';
    include('../header.php');
    $items = $data->getData("SELECT * FROM food_item as f, categories as c WHERE f.category_id=c.category_id");
    $categories = $data->getData('SELECT * FROM categories');
    // print_r($categories[0])
    
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
                            <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?> "><img src="../images/itemImage.jpg" alt="item image" class="" onclick="document.getElementById('<?php echo $item['food_name'] ?>').style.display='block'"></a>
                        </div>
                        
                        <div class="cardcon">
                            <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?>"><h2><?php echo $item['food_name'] ?></h2></a>
                            <h4>Rs. <?php echo $item['food_price'] ?></h4>
                            <h6 class="category"><?php echo $item['category_name'] ?></h6>
                            <button onClick="addToCart('<?php echo $item['food_id'] ?>')" class="order">Order</button>
                            <button onClick="addToCart('<?php echo $item['food_id'] ?>')" class="cart"><span class="material-icons">add_shopping_cart</span></button><br/>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </section>
    </div>

    <script>
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