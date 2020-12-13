<?php 
    require('../../../function.php');
    session_start();
    if($_SESSION['role'] !== 'admin'){
        echo '<script>location.href = "../../User/pageTemplates/menu.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="./table.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">  -->

    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
            <h2>Zwiggy</h2>
    </header>
    <div class="container">
        <div class="aside">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./Requests.php">Requests</a></li>
                <li><a href="./AcceptedOwners.php">Accepted Owners</a></li>
                <li><a href="./BlockedOwners.php">Blocked Owners</a></li>
                <li><a href="./UserInfo.php">User Info</a></li>
                <li><a href="./HotelInfo.php">Hotel Info</a></li>
                <li><a href="./Orders.php">Orders</a></li>
            </ul>
        </div>
        <div class="main">