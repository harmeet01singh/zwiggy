<?php 

#session_start();

$title="UserProfile";
$css = '<link rel="stylesheet" href="../Css/userprofile.css"/>';
include("../header.php");

if(isset($_POST['email'])){

  $data->uodateData("UPDATE `user` SET `role` = `pending`, `cor_hotel_id`=  '{$_POST['email']}' WHERE `user_id`='{$_SESSION['usid']}' ");

    if(isset($_FILES['cimage']) and isset($_FILES['pimage']) ){

        $cloc = '../../upload/covers/'.$_FILES['cimage']['name'];
        $ploc = '../../upload/profiles/'.$_FILES['pimage']['name'];
        
        $covsuc = move_uploaded_file( $_FILES['cimage']['tmp_name'], $cloc);
        $prosuc = move_uploaded_file( $_FILES['pimage']['tmp_name'], $ploc);

        if( $covsuc && $prosuc){
            $s = $data->insertData("INSERT INTO `hotel`(`hotel_mail`, `approved`, `hotel_name`, `hotel_address_1`, `hotel_address_2`, `hotel_city`, `hotel_postal_code`, `hotel_contact`, `hotel_description`, `cover_image`, `profile_image` ) VALUES 
            ( '{$_POST['email']}', 0, '{$_POST['rname']}', '{$_POST['addr1']}', '{$_POST['addr2']}', '{$_POST['city']}', '{$_POST['postal']}', '{$_POST['contact']}', '{$_POST['info']}', '{$cloc}', '{$ploc}' ) ");

            if($s){
                echo '<script>alert("Success")</script>';
            }
        }else{
            echo $covsuc.' '.$prosuc;
        }
    }
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
            <input class="finput" required type="text" id="email" name="email" placeholder="Your Restaurant Email">
          
            <label class="flabel" for="rname"> Name:</label>
            <input class="finput" required type="text" id="rname" name="rname" placeholder="Your Restaurant name">

            <label class="flabel" for="addr">Building address:</label>
            <input class="finput" required type="text" id="addr1" name="addr1" placeholder="Your Restaurant Address">

            <label class="flabel" for="addr">Street address:</label>
            <input class="finput" required type="text" id="addr2" name="addr2" placeholder="Your Street Address">
            
            <label class="flabel" for="contact">Contact:</label>
            <input class="finput" required type="text" id="contact" name="contact" placeholder="Your Contact No.">

            <label class="flabel" for="postal">Postal Code:</label>
            <input class="finput" required type="tel" id="postal" name="postal" placeholder="Postal code">

            <label class="flabel" for="city">Postal Code:</label>
            <input class="finput" required type="text" id="city" name="city" placeholder="City">

            <label class="flabel" for="info">Description:</label>
            <textarea class="finput" required id="info" name="info" placeholder="Your Restaurant Description"></textarea>

            <label class="flabel" for="cimage">Cover Image:</label>
            <input class="finput" required type="file" id="cimage" name="cimage">

            <label class="flabel" for="pimage">Profile Image:</label>
            <input class="finput" required type="file" id="pimage" name="pimage">

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