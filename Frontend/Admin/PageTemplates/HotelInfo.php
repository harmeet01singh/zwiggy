<?php 

$title="HotelInfo";
include("../sidebar.php");

$hotels = $data->getData('SELECT * FROM hotel');

if(isset($_POST['hid'])){
    $block = $data->deleteData("DELETE FROM `hotel` WHERE `hotel`.`hotel_id` = '{$_POST['hid']}'");
    echo $block;
}

?>
            <table id="table">
                <thead>
                    <tr>
                        <th>Hotel Id</th>
                        <th>Hotel Name</th>
                        <th>Hotel City</th>
                        <th>Contact</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel) { ?>
                        <tr class="rows">
                            <td><?php echo $hotel['hotel_id'] ?></td>
                            <td><?php echo $hotel['hotel_name'] ?></td>
                            <td><?php echo $hotel['hotel_city'] ?></td>
                            <td><?php echo $hotel['hotel_contact'] ?></td>
                            <td><button onClick=block(<?php echo $hotel['hotel_id'] ?>) >Remove</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td id="pages"></td>
                    </tr>
                </tfoot>
            </table>
            
            <script src='pagination.js'></script>
            <script>
                function block(hid){
                    // console.log(userid);
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {                     

                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                            alert('success');
                        }
                    };
                    // document.getElementsByClassName("cart");
                    xhttp.open("POST", "", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send(`hid=${hid}`);
                }
            </script>
        </div>
    </div>
</body>
</html>