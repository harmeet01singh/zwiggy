<?php 

$title="BookedTables";
include("../sidebar.php");

$reservations = $data->query('SELECT * FROM ((reservations INNER JOIN user ON reservations.user_id=user.user_id)INNER JOIN reservation_tables ON reservation_tables.table_id=reservations.table_id)');

// print_r($items);

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



