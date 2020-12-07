<?php 

session_start();

$username = "";
$userid="";


$errors = array();

$db = mysqli_connect('localhost','root','','zwiggy') or die("couldnot connect to database");

if (isset($_POST['reg_user'])) {

$userid = mysqli_real_escape_string($db, $_POST['adduserid']);
$username = mysqli_real_escape_string($db, $_POST['adduname']);
$password = mysqli_real_escape_string($db, $_POST['addpassword']);
$address1 = mysqli_real_escape_string($db, $_POST['add_add1']);
$address2 = mysqli_real_escape_string($db, $_POST['add_add2']);

$postalcode = mysqli_real_escape_string($db, $_POST['addpc']);
$phonenumber = mysqli_real_escape_string($db, $_POST['addphn']);

$accountnumber = mysqli_real_escape_string($db, $_POST['add_acc']);




// $user_check_query = "SELECT * FROM user WHERE `username`= '$username' OR `user_id` = '$userid' LIMIT 1 ";
// $results = mysqli_query($db, $user_check_query);
// $user = mysqli_fetch_assoc($result);

// if(!empty($user)) {
    
//     if($user['username'] === $username) {array_push($errors,"username already exists");};
//     if($user['user_id'] === $userid) {array_push($errors,"user_id already exists");};
// }

// if(count($errors)== 0)

// {
    $password = md5($password);

    $queryy="INSERT INTO user(user_id, username, password, address_1, address_2, postal_code, contact, account_no) VALUES ('$userid','$username','$password','$address1','$address2','$postalcode','$phonenumber','$accountnumber')";

    $result=mysqli_query($db,$queryy);
    
     
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "YOU ARE LOGGED IN";
    
    
    
// }

}

if (isset($_POST['login_user'])) {
    $userid = mysqli_real_escape_string($db, $_POST['userid']);
    $password = mysqli_real_escape_string($db, $_POST['passwordd']);


  
   
        $password = md5($password);
        $query1 = "SELECT * FROM user WHERE `user_id`='$userid' AND `password`='$password'";
        $resultss = mysqli_query($db, $query1);

        
       
        if (mysqli_num_rows($resultss) == 1) {
          $_SESSION['user_id'] = $userid;
          $_SESSION['success'] = "You are now logged in";
          header('location: menu.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    
  }
  
  ?>




