<?php 
session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="Feedback";
include("../sidebar.php");

$feedbacks = $data->getData("SELECT feedbacks.*, user.username FROM feedbacks, user WHERE user.user_id=feedbacks.user_id AND hotel_id='{$_SESSION['cor_hotel_id']}'");

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



