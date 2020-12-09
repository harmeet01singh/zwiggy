<?php 

$title="AcceptedOwners";
include("../sidebar.php");

$aowners = $data->getData("SELECT * FROM user WHERE role='owner'");

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
                            <td><button type="submit" name='remove' value=<?php echo $aowner['user_id'] ?> >Block</button></td>
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