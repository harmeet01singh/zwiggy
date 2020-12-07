<?php
require('function.php');

// echo 'Check 1';
if (isset($_POST['uname'])) {
    $username = mysqli_real_escape_string($db->conn, $_POST['uname']);
    $password = mysqli_real_escape_string($db->conn, $_POST['psw']);




        $password = md5($password);
        $result = $data->getData("SELECT username FROM user WHERE `username`='$username' AND `password`='$password'");

        if(count($result) === 1){
            echo '<script> location.href = "Frontend/User/pageTemplates/menu.php" </script>';
        }
    
        // if (mysqli_num_rows($resultss) == 1) {
        // $_SESSION['user_id'] = $userid;
        // $_SESSION['success'] = "You are now logged in";
        // header('location: menu.php');
        // }else {
        //     array_push($errors, "Wrong username/password combination");
        // }
    
}
?>