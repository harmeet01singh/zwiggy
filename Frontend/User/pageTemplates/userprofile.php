<?php 

$title="UserProfile";
include("../header.php");

?>

<div class="tab">
  <button class="tablinks" onclick="openside(event, 'side1')" id="defaultOpen">Personal</button>
  <button class="tablinks" onclick="openside(event, 'side2')" id="defaultOpen">Email</button>
  <button class="tablinks" onclick="openside(event, 'side3')" id="defaultOpen">Account</button>
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
   