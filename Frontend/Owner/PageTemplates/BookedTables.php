<?php 

session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="BookedTables";
include("../sidebar.php");

$reservations = $data->getData("SELECT reservations.*, user.username, user.contact FROM reservations, user WHERE reservations.user_id = user.user_id AND reservations.table_id IN (SELECT table_id FROM reservation_tables, hotel as h WHERE reservation_tables.hotel_id=h.hotel_mail AND h.hotel_mail = '{$_SESSION['cor_hotel_id']}')");

// print_r($reservations[0]);

?>
            <table id="table">
                <tr>
                    <th>Reservation Id</th>
                    <th>Username</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>No Of Hours</th>
                    <th>Table Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php foreach($reservations as $reservation) { ?>
                <tr>
                    <td><?php echo $reservation['reservation_id'] ?></td>
                    <td><?php echo $reservation['username'] ?></td>
                    <td><?php echo $reservation['reservation_date'] ?></td>
                    <td><?php echo $reservation['reservation_time'] ?></td>
                    <td><?php echo $reservation['no_of_hours'] ?></td>
                    <td><?php echo $reservation['table_id'] ?></td>
                    <td><?php echo $reservation['status'] ?></td>
                    
                    <td><form>
  
                            <select id="mySelect">
                            <option value="dd1">Approved</option>
                            <option value="dd2">Rejected</option>
                            </select>
                        </form>
                    </td>
                    
                </tr>
                <?php } ?>
            </table>
            
            

        </div>
    </div>

   

</body>
</html>



