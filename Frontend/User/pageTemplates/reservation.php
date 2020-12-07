
<?php 

$title="Reservation";
include("../header.php");
$reservations = $data->query('SELECT * FROM reservation_tables');


?>





<div class="flex-container">

<?php foreach($reservations as $reservation) { ?>

        
        <div class="container1">
        
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image" onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='block'">
            
            <div id="<?php echo $reservation['table_id'] ?>" class="modal">
            <span onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='none'" class="close" title="Close Modal">&times;</span>

            <form class="modal-content" action="/action_page.php">
            <div class="container">
            
            <label for="email"><b>User Id:</b></label>
            <input type="text" placeholder="Enter User_id" name="email" required>

            <label for="table"><b></b>Table:</label>
            <input type="text" placeholder="Enter Table Number" name="tbno" value="<?php echo $reservation['table_id'] ?>" required>

            <label for="date"><b></b>Date:</label>
            <input type="date" placeholder="Select Date" name="date" required>

            <label for="time"><b></b>Time:</label>
            <input type="time" placeholder="" name="time" required>

            <label for="nop"><b></b>No Of Persons:</label>
            <input type="text" placeholder="Enter Number Of Persons" name="nop" required>

            <label for="noh"><b></b>No Of Hours:</label>
            <input type="text" placeholder="Enter Number Of Hours" name="noh" required>

                <button type="button" onclick="document.getElementById('<?php echo $reservation['table_id'] ?>').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Book</button>
           
            </div>
            </form> 
              </div>

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
</script>
</html>
