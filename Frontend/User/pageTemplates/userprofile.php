<?php 

$title="UserProfile";
include("../header.php");

?>

<div class="tab">
  <button class="tablinks" onclick="openside(event, 'side1')" id="defaultOpen">Personal</button>
  <button class="tablinks" onclick="openside(event, 'side2')" id="defaultOpen">Email</button>
  <button class="tablinks" onclick="openside(event, 'side3')" id="defaultOpen">Account</button>
  <button class="tablinks" onclick="openside(event, 'side4')" id="defaultOpen">Apply for Hotel </button>
</div>

<div id="side1" class="tabcontent">
  <h3>Personal Details</h3>
  <p></p>
</div>

<div id="side2" class="tabcontent">
  <h3>Email</h3>
  <p></p> 
</div>

<div id="side3" class="tabcontent">
  <h3>Account</h3>
  <p></p>
</div>

<div id="side4" class="tabcontent">
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

    <label for="fname">Cover Image:</label>
    <input type="text" id="cimage" name="cimage" placeholder="put your image link here">

    <label for="lname">Profile Image:</label>
    <input type="text" id="pimage" name="pimage" placeholder="put your image link here">

    <label for="lname">Brand Logo:</label>
    <input type="text" id="blogo" name="blogo" placeholder="put your brand logo here">
  

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</div>

<script>
function openside(evt, sidename) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(sidename).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   