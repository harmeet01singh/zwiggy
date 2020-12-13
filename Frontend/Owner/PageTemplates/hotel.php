<?php 
$css = '<link></link>';

$title="HotelProfile";
include("../sidebar.php")

?>
<div style="position:absolute;top:11%;left:16%;right:1%;">

<div class="formcontainer">
<form action="/action_page.php">
<h3>Restaurant Images:</h3><br>
    <label for="fname">Cover Image:</label>
    <input type="text" id="cimage" name="cimage" placeholder="put your image link here">

    <label for="lname">Profile Image:</label>
    <input type="text" id="pimage" name="pimage" placeholder="put your image link here">

    <label for="lname">Brand Logo:</label>
    <input type="text" id="blogo" name="blogo" placeholder="put your brand logo here">
  
    <input type="submit" value="Submit">
  </form>
</div>

<br>

<div class="formcontainer">
<form action="/action_page.php">
<h3>Restaurant Details</h3><br>
    <label for="fname"> Name:</label>
    <input type="text" id="fname" name="name" placeholder="Your Restaurant name">

    <label for="lname">Address:</label>
    <input type="text" id="lname" name="address" placeholder="Your Restaurant Address">

    <label for="fname">Description:</label>
    <input type="text" id="fname" name="description" placeholder="Your Restaurant Description">

    <label for="lname">Email:</label>
    <input type="text" id="lname" name="email" placeholder="Your Restaurant Email">

    <label for="fname">Contact:</label>
    <input type="text" id="fname" name="contact" placeholder="Your Restaurant Email">

   
  
    <input type="submit" value="Submit">
  </form>
</div>

<br>
<div class="formcontainer">
<form action="/action_page.php">
<h3>Working Details</h3><br>


<h4>On Weekdays:</h4><br>

    <label >Restaurant Opening Time:</label>
    <input type="time"  name="day_op_time" >

    <label >Restaurant Closing Time:</label>
    <input type="time"  name="day_cl_time">

<h4>On Weekends:</h4><br>

<label >Restaurant Opening Time:</label>
<input type="time" name="end_op_time" >

<label >Restaurant Closing Time:</label>
<input type="time"  name="end_cl_time">

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</body>
</html>


