<?php 

$title="UserInfo";
include("../sidebar.php");

$users = $data->getData('SELECT * FROM user');

// print_r($users);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delId = $_POST['remove'];
    if(empty($delId)){
        echo 'Empty';
    }
    else{
        echo '<script>var y = confirm("Are you Sure you want to remove this user: '.$delId.'");
                if(y){
                    alert("confirmed: '.$delId.'");
                }else{
                    alert("Cancelled");
                }
            </script>';
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
                    <?php foreach($users as $user) { ?>
                        <tr class="rows">
                            <td><?php echo $user['user_id'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['city'] ?></td>
                            <td><?php echo $user['account_no'] ?></td>
                            <td>
                                <form method="POST">
                                    <button type="submit" name='remove' value=<?php echo $user['user_id'] ?> >Remove</button>
                                </form>
                            </td>
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
</body>
</html>