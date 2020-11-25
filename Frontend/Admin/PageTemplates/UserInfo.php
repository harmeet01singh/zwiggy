<?php 

$title="UserInfo";
include("../sidebar.php");

$users = $data->query('SELECT * FROM user');

// print_r($users);

?>
            <table id="table">
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>City</th>
                    <th>Account No.</th>
                    <th>Remove</th>
                </tr>
                <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['city'] ?></td>
                    <td><?php echo $user['account_no'] ?></td>
                    <td><button>Remove</button></td>
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>