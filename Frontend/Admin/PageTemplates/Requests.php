<?php 

$title="Requests";
include("../sidebar.php");

$requests = $data->getData("SELECT * FROM hotel, user WHERE hotel.approved=0 AND user.cor_hotel_id=hotel.hotel_mail");

if(isset($_POST['hid'])){
    
    $data->updateData("UPDATE `user` SET `role` = `owner` WHERE `cor_hotel_id`=(SELECT hotel_mail FROM hotel WHERE hotel_id='{$_POST['hid']}') AND `role`='pending' ");

    $accept = $data->updateData("UPDATE `hotel` SET `approved` = '1' WHERE `hotel`.`hotel_id` = '{$_POST['hid']}' ");
    if($accept){
        echo '<script>alert("Success")</script>';
    }
}

if(isset($_POST['hoid'])){
    
    $accept = $data->updateData("UPDATE `user` SET `role` = `blocked` WHERE `cor_hotel_id`=(SELECT hotel_mail FROM hotel WHERE hotel_id={$_POST['hid']}) ");
    if($accept){
        echo '<script>alert("Success")</script>';
    }
}
?>

            <table id="table">
                <thead>
                    <tr>
                        <th>Hotel id</th>
                        <th>Hotel mail</th>
                        <th>Owner name</th>
                        <th>Location</th>
                        <th>View Profile</th>
                        <th>Accept</th>
                        <th>Block</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($requests as $request) { ?>
                        <tr class="rows">
                            <td><?php echo $request['hotel_id'] ?></td>
                            <td><?php echo $request['hotel_mail'] ?></td>
                            <td><?php echo $request['username'] ?></td>
                            <td><?php echo $request['hotel_city'] ?></td>
                            <td><a href="./rprofile.php?hid=<?php echo $request['hotel_id'] ?>" target="_blank">View Page</a></td>
                            <td><button onClick="accept(<?php echo $request['hotel_id'] ?>)" >Accept</button></td>
                            <td><button onClick=block(<?php echo $request['hotel_id'] ?>) >Block</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td id="pages"></td>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
    <div id="dummy"></div>

    <script src='pagination.js'></script>
    <script>
        function accept(hotelid){
            console.log(hotelid);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {                     

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert('success');
                }
            };
            // document.getElementsByClassName("cart");
            xhttp.open("POST", "", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`hid=${hotelid}`);
        }

        function block(hotelid){
            console.log(hotelid);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {                     

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert('success');
                }
            };
            // document.getElementsByClassName("cart");
            xhttp.open("POST", "", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`hoid=${hotelid}`);
        }
    </script>
    </body>
</html>
UPDATE `hotel` SET `approved` = '0' WHERE `hotel`.`hotel_mail` = 'adolfo30@gutkowski.com'; 