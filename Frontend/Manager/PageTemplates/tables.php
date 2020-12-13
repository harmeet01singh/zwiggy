<?php 

session_start();

$_SESSION['cor_hotel_id'] = 'retha.greenholt@rueckerblock.com';

$title="BookedTables";
include("../sidebar.php");

$reservations = $data->getData("SELECT * FROM reservation_tables WHERE hotel_id='{$_SESSION['cor_hotel_id']}' ");

// print_r($reservations[0]);

?>
            <table id="table">
                <tr>
                    <th>Table Id</th>
                    <th>Capacity</th>
                    <th>AC</th>
                    <th>Price per hr.</th>
                </tr>
                <?php foreach($reservations as $reservation) { ?>
                <tr>
                    <td><?php echo $reservation['table_id'] ?></td>
                    <td><?php echo $reservation['no_of_persons'] ?></td>
                    <td><?php echo $reservation['AC'] ?></td>
                    <td><?php echo $reservation['table_price'] ?></td>                  
                </tr>
                <?php } ?>
            </table>
            
            

        </div>
    </div>

   

</body>
</html>



