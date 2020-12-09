<?php

session_start();

require('../../../function.php');

if(isset($_POST['fid'])){
    // $result = $data->insertData("INSERT INTO `cart`(`user_id`, `food_id`) VALUES ('{$_SESSION['uid']}','{$_POST['fid']}')");

    if($result) {
        echo 'success';
    }
}

?>