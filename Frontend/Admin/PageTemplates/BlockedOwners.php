<?php

$title="BlockedOwners";
include("../sidebar.php");

$bowners = $data->getData("SELECT * FROM user WHERE role='blocked'");

if(isset($_POST['hid'])){
    
    $s = $data->updateData("UPDATE `user` SET `role` = 'owner' WHERE `cor_hotel_id`='{$_POST['hid']}' AND `role`='blocked' ");

    $accept = $data->updateData("UPDATE `hotel` SET `approved` = '1' WHERE `hotel`.`hotel_mail` = '{$_POST['hid']}' ");
    if($accept){
        echo '<script>alert("Success")</script>';
    }

    print_r($s);
    print_r($accept);
}

?>

            <table id="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                        <th>City</th>
                        <th>Account No.</th>
                        <th>Accept</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($bowners as $bowner) { ?>
                        <tr class="rows">
                            <td><?php echo $bowner['user_id'] ?></td>
                            <td><?php echo $bowner['username'] ?></td>
                            <td><?php echo $bowner['city'] ?></td>
                            <td><?php echo $bowner['account_no'] ?></td>
                            <td><button onClick=accept('<?php echo $bowner['cor_hotel_id'] ?>') >Accept</button></td>
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
    </script>
</body>
</html>