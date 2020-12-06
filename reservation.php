
<?php 

$title="Reservation";
include("./Frontend/User/header.php")


?>


<div class="flex-container">

        
        <div class="container1">
        
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image" onclick="document.getElementById('id01').style.display='block'">
            
            
            <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <form class="modal-content" action="/action_page.php">
            <div class="container">
            
            <label for="email"><b>User Id:</b></label>
            <input type="text" placeholder="Enter User_id" name="email" required>

            <label for="table"><b></b>Table:</label>
            <input type="text" placeholder="Enter Table Number" name="tbno" required>

            <label for="date"><b></b>Date:</label>
            <input type="date" placeholder="Select Date" name="date" required><br><br>

            <label for="time"><b></b>Time:</label>
            <input type="time" placeholder="" name="time" required><br><br>

            <label for="nop"><b></b>No Of Persons:</label>
            <input type="text" placeholder="Enter Number Of Persons" name="nop" required><br>

            <label for="noh"><b></b>No Of Hours:</label>
            <input type="text" placeholder="Enter Number Of Hours" name="noh" required>

            
            
           <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Book</button>
            </div>
            </div>
            </form>
             </div>

        </div>




        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
            

            
        </div>

        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
        </div>

        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
        </div>

        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
        </div>

        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
        </div>

        <div class="container1">
            <img src="http://localhost/zwiggy/images/rlogo.png" alt="item image" class="image">
        </div>

    
</div>



</body>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>
