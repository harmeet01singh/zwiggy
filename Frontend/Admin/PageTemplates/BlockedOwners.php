<?php 

$title="BlockedOwners";
include("../sidebar.php");

$bowners = $data->getData("SELECT * FROM user WHERE role='blocked'");

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
                            <td><button type="submit" name='remove' value=<?php echo $bowner['user_id'] ?> >Accept</button></td>
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