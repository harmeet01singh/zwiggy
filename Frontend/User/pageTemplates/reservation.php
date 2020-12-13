<?php 

$title="Reservation";
$css = '<link rel="stylesheet" href="../Css/reservation.css"/>';
include("../header.php");
$reservations = $data->getData('SELECT r.*, h.hotel_name,h.hotel_id FROM reservation_tables as r, hotel as h WHERE r.hotel_id = h.hotel_mail');

if(isset($_POST['tbno'])) {
    // echo $_POST['foodid'];
    $s = $data->insertData("INSERT INTO `reservations` (`user_id`, `table_id` , `reservation_date`, `reservation_time`, `no_of_hours`, `payment_methodd`, `total_amountt`) VALUES ('{$_SESSION['usid']}', '{$_POST['tbno']}' , '{$_POST['dat']}' ,'{$_POST['tim']}', '{$_POST['noh']}', '{$_POST['payment']}', '{$_POST['amount']}' )");

    echo $s;        

    if($s){
        echo '<script> location.href = "./history.php" </script>';
    }
}
?>





    <div class="flex-container">

        <?php foreach($reservations as $reservation) { ?>

            
            <div class="card">
            
                <div class="cardimg">
                    <img src="../../upload/tables/restaurant.jpg" alt="item image" class="" onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='block'">
                </div>
                
                <div class="cardcon">
                    <a href="./rprofile.php?hid=<?php echo $reservation['hotel_id'] ?>"><h2><?php echo $reservation['hotel_name'] ?></h2></a>
                    <h4>No of persons: <?php echo $reservation['no_of_persons'] ?></h4>
                </div>

            </div>
                
                <div id="<?php echo $reservation['table_id'] ?>" class="modal">
                    <span onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <form class="modal-content" action="" method="POST">
                        <div class="container">
                        
                            <label for="tbno">Table No:</label>
                            <input type="text" readonly="readonly" name="tbno" value="<?php echo $reservation['table_id'] ?>" required>

                            <label for="dat">Date:</label>
                            <input type="date" placeholder="Select Date" name="dat" required><br><br>

                            <label for="tim">Time:</label>
                            <input type="time" name="tim" required><br><br>

                            <label for="nop">No Of Persons:</label>
                            <input type="text" placeholder="Enter Number Of Persons" name="nop" value="<?php echo $reservation['no_of_persons'] ?>" readonly="readonly" required><br><br>

                            <label for="noh">No Of Hours:</label>
                            <select onChange="calam(event, <?php echo $reservation['table_id'] ?>)" required name="noh" id="noh">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                            </select><br>

                            <label for="payment">Select the payment method:</label>
                            <select required name="payment" id="payment">
                                <option value="on arrival">On arrival</option>
                                <option value="epay">E-Pay</option>
                            </select><br>

                            <label>Price per hour: <p id="rate<?php echo $reservation['table_id'] ?>"><?php echo $reservation['table_price'] ?></p></label><br>
                            <label>Total amount: <input name="amount" readonly="readonly" id="amount<?php echo $reservation['table_id'] ?>" value="<?php echo $reservation['table_price'] ?>"></input></label><br>

                            <button type="button" onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn">Book</button>
                        
                        </div>
                    </form>
                </div>

            <?php } ?>
    </div>





    </body>

    <script>
    // Get the modal
    var modal = document.getElementById('<?php echo $reservation['table_id'] ?>');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

    function calam(e, id) {
        rate = document.getElementById(`rate${id}`).innerText;
        // console.log(e.currentTarget.value, rate)
        document.getElementById(`amount${id}`).value = e.currentTarget.value * rate;
    }
    </script>
    </html>
