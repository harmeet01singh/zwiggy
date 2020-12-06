<?php 

$title="Feedback";
include("../sidebar.php");

$feedbacks = $data->query('SELECT * FROM feedbacks INNER JOIN user on feedbacks.user_id=user.user_id');

// print_r($items);

?>
            <table id="table">
                <tr>
                    <th>Username</th>
                    <th>User Id</th>
                    <th>Ratings</th>
                    <th>Feedback Message</th>
                
                </tr>
                <?php foreach($feedbacks as $feedback) { ?>
                <tr>
                    <td><?php echo $feedback['username'] ?></td>
                    <td><?php echo $feedback['user_id'] ?></td>
                    <td><?php echo $feedback['rating'] ?></td>
                    <td><?php echo $feedback['message'] ?></td>
                   
                </tr>
                <?php } ?>
            </table>
            

        </div>
    </div>
</body>
</html>



