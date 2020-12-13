<?php 

$title="AcceptedOwners";
include("../sidebar.php");

$aowners = $data->getData("SELECT * FROM user WHERE role='owner'");

if(isset($_POST['hoid'])){
    
    $s = $data->updateData("UPDATE `user` SET `role` = 'blocked' WHERE `cor_hotel_id`='{$_POST['hoid']}' AND `role`='owner' ");
    $accept = $data->updateData("UPDATE `hotel` SET `approved` = '0' WHERE `hotel`.`hotel_mail` = '{$_POST['hoid']}' ");
    if($accept){
        echo '<script>alert("Success")</script>';
    }
}
?>

            <table id="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                        <th>City</th>
                        <th>Account No.</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($aowners as $aowner) { ?>
                        <tr class="rows">
                            <td><?php echo $aowner['user_id'] ?></td>
                            <td><?php echo $aowner['username'] ?></td>
                            <td><?php echo $aowner['city'] ?></td>
                            <td><?php echo $aowner['account_no'] ?></td>
                            <td><button onClick="block('<?php echo $aowner['cor_hotel_id'] ?>')" >Block</button></td>
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