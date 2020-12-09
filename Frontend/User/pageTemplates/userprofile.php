<?php 

$title="UserProfile";
$css = '<link rel="stylesheet" href="../Css/userprofile.css"/>';
include("../header.php");

if(isset($_POST['email'])){
  // print_r($_POST);
}

if(isset($_FILES['cimage'])){
  // print_r($_FILES['cimage']);

  move_uploaded_file( $_FILES['cimage']['tmp_name'], 'upload/'.$_FILES['cimage']['name']);
}

?>

<section class="mainbody">
  <div class="tab">
    <button class="tablinks" onclick="openside(event, 'side1')" id="personal">Personal</button>
    <button class="tablinks" onclick="openside(event, 'side2')" id="mail">Email</button>
    <button class="tablinks" onclick="openside(event, 'side3')" id="acc">Account</button>
    <button class="tablinks" onclick="openside(event, 'side4')" id="apply">Apply for Hotel </button>
  </div>

  <div class="maincon">
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
        <h2>Restaurant Details</h2><br>
        <p></p>
        <div class="formcontainer">
          <form class="form" enctype="multipart/form-data" action="" method="POST">
            <label class="flabel" for="email">Email:</label>
            <input class="finput" type="text" id="email" name="email" placeholder="Your Restaurant Email">
          
            <label class="flabel" for="rname"> Name:</label>
            <input class="finput" type="text" id="rname" name="rname" placeholder="Your Restaurant name">

            <label class="flabel" for="addr">Address:</label>
            <input class="finput" type="text" id="addr" name="addr" placeholder="Your Restaurant Address">
            
            <label class="flabel" for="contact">Contact:</label>
            <input class="finput" type="text" id="contact" name="contact" placeholder="Your Contact No.">

            <label class="flabel" for="desc">Description:</label>
            <textarea class="finput" id="info" name="desc" placeholder="Your Restaurant Description"></textarea>

            <label class="flabel" for="cimage">Cover Image:</label>
            <input class="finput" type="file" id="cimage" name="cimage">

            <label class="flabel" for="pimage">Profile Image:</label>
            <input class="finput" type="file" id="pimage" name="pimage">

            <label class="flabel" for="blogo">Brand Logo:</label>
            <input class="finput" type="file" id="blogo" name="blogo">

            <button type="submit">Submit</button>
          </form>
      </div>
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
  document.getElementById("apply").click();

  // function apply(e){
  //   e.preventDefault();
  //   alert(e.currentTarget[0].value);
    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {                     

    // if (xhttp.readyState == 4 && xhttp.status == 200) {
    //     alert(xhttp.responseText);
    //   }
    // };
    // // document.getElementsByClassName("cart");
    // xhttp.open("POST", "apply.php", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send();
  // }
  </script>
    
</section>