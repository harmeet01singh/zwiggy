<?php 

$css = '<link rel="stylesheet" href="./modal.css">';
$title="MenuItems";
include("../sidebar.php");
$items = $data->getData("SELECT * FROM food_item WHERE hotel_id='{$_SESSION['cor_hotel_id']}'");
$cat = $data->getData("SELECT * FROM categories");

if(isset($_POST['fid'])){
    
    $accept = $data->insertData("INSERT INTO `food_item` ( `food_name`, `food_price`, `offer`, `food_description`, `hotel_id`, `category_id`) VALUES ('{$_POST['fname']}', '{$_POST['fprice']}', '{$_POST['offer']}', '{$_POST['info']}', '{$_SESSION['cor_hotel_id']}', '{$_POST['cat']}' )");

    // $accept = $data->updateData("UPDATE `hotel` SET `approved` = '1' WHERE `hotel`.`hotel_id` = '{$_POST['hid']}' ");
    // if($accept){
        echo $accept;
    // }
}

if(isset($_POST['foodid'])){
    
    $accept = $data->updateData("UPDATE `food_item` SET `food_name`= '{$_POST['fname']}', `food_image`= '{$_POST['fimg']}', `food_price`= '{$_POST['fname']}', `offer`= '{$_POST['offer']}', `food_description`= '{$_POST['info']}', `category_id`= '{$_POST['cat']}' WHERE food_id={$_POST['foodid']} ");
    // if($accept){
        echo $accept;
    // }
}

if(isset($_POST['foid'])){
    
    $accept = $data->deleteData("DELETE FROM `food_item` WHERE `food_item`.`food_id`= {$_POST['foid']} ");
    if($accept){
        echo '<script>alert("Deleted")</script>';
    }
}
// print_r($items);

?>
            <div class="create">
                <button onclick="document.getElementById('createmod').style.display='block'">Create</button>
            </div>
            <table id="table">
                <thead>
                    <tr>
                        <th>Food Name</th>
                        <th>View profile</th>
                        <th>Food Price</th>
                        <th>Offer</th>
                        <th>Price after discount</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($items as $item) { ?>
                        <tr class="rows">
                            <td><?php echo $item['food_name'] ?></td>
                            <td><a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?>" target="_blank">View</a></td>
                            <td><?php echo $item['food_price'] ?></td>
                            <td><?php echo $item['offer'] ?></td>
                            <td><?php echo ($item['food_price']*(1 - $item['offer']/100)) ?></td>
                            <td><?php echo $item['food_description'] ?></td>
                            <td><button class="btn" onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='block'" >Edit</button>
                                <div id="<?php echo $item['food_id'] ?>" class="modal">
                                    <span onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='none'" class="close" title="Close Modal">&times;</span>

                                    <form class="modal-content" action="" method="POST">
                                        <div class="cont">
                                            <label for="foodid"><b></b>Food Id:</label>
                                            <input type="text" id="foodid" name="foodid" value="<?php echo $item['food_id'] ?>" ><br>

                                            <label for="fname"><b></b>Food Name:</label>
                                            <input type="text" name="fname" value="<?php echo $item['food_name'] ?>"><br>

                                            <label for="fimg"><b></b>Food Image:</label>
                                            <input type="file" name="fimg"><br>

                                            <label for="fprice"><b></b>Food Price:</label>
                                            <input type="text" name="fprice" value="<?php echo $item['food_price'] ?>"><br>

                                            <label for="offer"><b></b>Offer:</label>
                                            <input type="text" name="offer" value="<?php echo $item['offer'] ?>"><br>

                                            <label for="info">Description:</label>
                                            <textarea required id="info" name="info" placeholder="Dish Description" cols="30" rows="10"><?php echo $item['food_description'] ?></textarea>

                                            <label for="cat">Select the category:</label>
                                            <select required name="cat" id="cat">
                                            <?php foreach($cat as $c){ ?>
                                                <option value="<?php echo $c['category_id'] ?>"><?php echo $c['category_name'] ?></option>
                                            <?php } ?>
                                            </select><br>

                                            <button type="button" onclick="document.getElementById('<?php echo $item['food_id'] ?>').style.display='none'" class="cancelbtn">Cancel</button>
                                            <button type="submit" class="signupbtn">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td><button class="btn" onClick="del(event, <?php echo $item['food_id'] ?>)">Remove</button></td>
                        </tr>

                        
                        
                    <?php } ?>
                </tbody>
                <tfoot>
                    <td id="pages"></td>
                </tfoot>
            </table>

            <div class="modal" id="createmod">
                <span onclick="document.getElementById('createmod').style.display='none'" class="close" title="Close Modal">&times;</span>

                <form class="modal-content" action="" method="POST">
                    <div class="cont">

                        <label for="fname"><b></b>Food Name:</label>
                        <input type="text" name="fname"><br>

                        <label for="fimg"><b></b>Food Image:</label>
                        <input type="file" name="fimg"><br>

                        <label for="fprice"><b></b>Food Price:</label>
                        <input type="text" name="fprice"><br>

                        <label for="offer"><b></b>Offer:</label>
                        <input type="text" name="offer"><br>

                        <label for="info">Description:</label>
                        <textarea required id="info" name="info" placeholder="Dish Description"></textarea>

                        <label for="cat">Select the category:</label>
                        <select required name="cat" id="cat">
                            <?php foreach($cat as $c){ ?>
                                <option value="<?php echo $c['category_id'] ?>"><?php echo $c['category_name'] ?></option>
                            <?php } ?>
                        </select><br>

                        <button type="button" onclick="document.getElementById('createmod').style.display='none'" class="cancelbtn">Cancel</button>
                        <input type="submit" class="signupbtn" value="Order">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="pagination.js"></script>
    <script>
        function del(e, foid){
            console.log(foid);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {                     

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                    e.currentTarget.parentElement.parentElement.style.display = 'none';
                }
            };
            // document.getElementsByClassName("cart");
            xhttp.open("POST", "", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`foid=${foid}`);
        }
    </script>
</body>
</html>



