
<?php 

$title="Profile";
$css = '<link rel="stylesheet" href="../Css/rprofile.css"/>';
include("../header.php");

if(isset($_GET['hid'])){
  $query = "SELECT * FROM hotel WHERE hotel_id='{$_GET['hid']}'";
  $hotel = $data->getData($query);
  // print_r($hotel);
  $items = $data->getData("SELECT * FROM food_item as f, categories as c WHERE f.category_id=c.category_id AND f.hotel_id=(SELECT hotel_mail FROM hotel where hotel_id={$_GET['hid']} )");

}

if(isset($_POST['msg'])) {
  // echo $_POST['foodid'];
  $s = $data->insertData("INSERT INTO `feedbacks` (`user_id`, `hotel_id`, `rating`, `message`) VALUES ('{$_SESSION['usid']}', '{$hotel[0]['hotel_mail']}' ,'{$_POST['rating']}', '{$_POST['msg']}')");

  if($s){
      echo '<script> alert("Feedback submitted") </script>';
  }    
}
?>

<div class="bgimage">
  <img src="http://localhost/zwiggy/images/rlogo.png" alt="rlogo" class="rlogo" >
</div>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Menu')">Menu</button>
  <button class="tablinks" onclick="openTab(event, 'Aboutus')">Aboutus</button>
</div>

<!-- Tab content -->
<div id="Menu" class="tabcontent">
  <div class="menucard">
    <?php foreach($items as $item) { ?>
      <div class="card">
          
          <div class="cardimg">
              <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?> "><img src="../../<?php echo $item['food_image'] ?>" alt="item image" class="" onclick="document.getElementById('<?php echo $item['food_name'] ?>').style.display='block'"></a>
          </div>
          
          <div class="cardcon">
              <a href="./itemProfile.php?fid=<?php echo $item['food_id'] ?>"><h2><?php echo $item['food_name'] ?></h2></a>
              <h4>Rs. <?php echo $item['food_price'] ?></h4>
              <h6 class="category"><?php echo $item['category_name'] ?></h6>
          </div>

      </div>
  <?php } ?>
  </div>
</div>

<div id="Aboutus" class="tabcontent">
  <div class="about">
    <div class="addr">
      <h2>Address: </h2>
      <p><?php echo $hotel[0]['hotel_address_1'] ?></p>
      <p><?php echo $hotel[0]['hotel_address_2'] ?></p>
      <p><?php echo $hotel[0]['hotel_postal_code'] ?></p>
    </div>
    <div class="info">
      <p>About us: <?php echo $hotel[0]['hotel_description'] ?></p>
      <h3>Timings: </h3>
      <h4>Weekdays: From <?php echo $hotel[0]['weekday_start'] ?> to <?php echo $hotel[0]['weekday_end'] ?></h4>
      <h4>Weekends: From <?php echo $hotel[0]['weekend_start'] ?> to <?php echo $hotel[0]['weekend_end'] ?></h4>
    </div>
  </div>
  <div class="feed">
    <h2>Rate our service: </h2>
    <form action="" class="comment" method="POST">
      <label for="rating">Your Rating</label>
      <select required name="rating" id="rating">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select><br>
      <textarea required name="msg" id="msg" cols="30" rows="5" placeholder="Write your comment here..."></textarea><br>
      <button type="submit">Submit Feedback</button><br>
  </form>
  </div>
</div>


<script>
  function openTab(evt, TabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
    document.getElementById(TabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  openTab(event, 'Menu');
</script>


	





