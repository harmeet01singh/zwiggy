<?php
require('function.php');

// echo 'Check 1';
if (isset($_POST['uname'])) {
    $username = mysqli_real_escape_string($db->conn, $_POST['uname']);
    $password = mysqli_real_escape_string($db->conn, $_POST['psw']);




        $password = md5($password);
        $result = $data->getData("SELECT * FROM user WHERE username='{$username}' AND password='{$password}'");

        if(count($result) === 1){

            session_start();
            $_SESSION['usid'] = $result[0]['user_id'];
            $_SESSION['uname'] = $result[0]['username'];
            $_SESSION['role'] = $result[0]['role'];
            $_SESSION['cor_hotel_id'] = $result[0]['cor_hotel_id'] ? $result[0]['cor_hotel_id']: 'NA';
            // print_r($result[0]);
            // print_r($_SESSION['uname']);
            echo '<script> location.href = "Frontend/User/pageTemplates/menu.php" </script>';
        }
    
}
?>