<?php 

$title="Requests";
include("../sidebar.php");

$requests = $data->getData("SELECT * FROM user WHERE role='pending'");

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
                    <?php foreach($requests as $request) { ?>
                        <tr class="rows">
                            <td><?php echo $request['user_id'] ?></td>
                            <td><?php echo $request['username'] ?></td>
                            <td><?php echo $request['city'] ?></td>
                            <td><?php echo $request['account_no'] ?></td>
                            <td><button type="submit" name='remove' value=<?php echo $request['user_id'] ?> >Accept</button></td>
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