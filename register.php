<?php 

require('function.php');
session_start();

$username = "";
$userid="";


$errors = array();

// $db = mysqli_connect('localhost','root','','zwiggy') or die("couldnot connect to database");

if (isset($_POST['adduserid'])) {

    $userid = mysqli_real_escape_string($db->conn, $_POST['adduserid']);
    $username = mysqli_real_escape_string($db->conn, $_POST['adduname']);
    $password = mysqli_real_escape_string($db->conn, $_POST['addpassword']);
    $address1 = mysqli_real_escape_string($db->conn, $_POST['add_add1']);
    $address2 = mysqli_real_escape_string($db->conn, $_POST['add_add2']);
    $postalcode = mysqli_real_escape_string($db->conn, $_POST['addpc']);
    $phonenumber = mysqli_real_escape_string($db->conn, $_POST['addphn']);
    $accountnumber = mysqli_real_escape_string($db->conn, $_POST['add_acc']);




    // $user_check_query = "SELECT * FROM user WHERE `username`= '$username' OR `user_id` = '$userid' LIMIT 1 ";
    // $results = $data->query($db, $user_check_query);
    // $user = mysqli_fetch_assoc($result);

    $password = md5($password);
    
    echo '<p>Check 1</p>';

    $data->insertData("INSERT INTO `user`(`user_id`, `username`, `password`, `address_1`, `address_2`, `city`, `postal_code`, `contact`, `account_no`) VALUES ('$userid','$username','$password','$address1','$address2', 'Mumbai','$postalcode','$phonenumber','$accountnumber')");
    
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "YOU ARE LOGGED IN";
    
    // if($result === TRUE){
    //     echo '<p>Success</p>';
    // }
}


  
  ?>