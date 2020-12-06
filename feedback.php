
<?php 

$title="AboutUs";
include("./Frontend/User/header.php");

// print_r($users);

?>

<div class="container">
  <form action="/action_page.php">
    
<h3>FEEDBACK FORM</h3><br>
  
  <label for="uname">Username</label>
    <input type="text" id="uname" name="uname" placeholder="Enter Username">

   


    <label for="subject">Feedback and Suggestion</label>
    <textarea id="subject" name="subject" placeholder="Enter your suggestion and feedback here" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>