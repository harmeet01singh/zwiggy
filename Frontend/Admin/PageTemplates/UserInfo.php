<?php 

$title="UserInfo";
include("../sidebar.php");

$users = $data->getData('SELECT * FROM user');

// print_r($users);
if(isset($_POST['userid'])){
    $block = $data->deleteData("DELETE FROM `user` WHERE `user`.`user_id` = '{$_POST['userid']}'");
    echo $block;
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
                    <?php foreach($users as $user) { ?>
                        <tr class="rows">
                            <td><?php echo $user['user_id'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['city'] ?></td>
                            <td><?php echo $user['account_no'] ?></td>
                            <td><button onClick="block('<?php echo $user['user_id'] ?>')" >Remove</button></td>
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
        function block(userid){
            console.log(userid);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {                     

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert('success');
                }
            };
            // document.getElementsByClassName("cart");
            xhttp.open("POST", "", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`userid=${userid}`);
        }
    </script>
</body>
</html>
"DELETE FROM `user` WHERE `user`.`user_id` = 'yundt.braulio@gmail.com'"