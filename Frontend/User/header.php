<?php 

    require('../../../function.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../header.css">
    <?php echo $css; ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <h2>Zwiggy</h2>
        <ul class="nav">
            <li><a href="./menu.php">
                <span class="material-icons">home</span>
                    <p>Menu</p>
                </a>
            </li>
            <li><a href="./reservation.php">
                <span class="material-icons">book_online</span>
                    <p>Reservations</p>
                </a>
            </li>
            <li><a href="./feedback.php">
                <span class="material-icons">feedback</span>
                    <p>About us</p>
                </a>
            </li>
            <li><a href="./cart.php">
                <span class="material-icons">shopping_cart</span>
                    <p>Cart</p>
                </a>
            </li>
        </ul>

        <?php if(isset($_SESSION['uname'])) { ?>
            <div class="dropdown">
                <button class="dropbtn" style="font-size: 20px"><strong><?php echo $_SESSION['uname']; ?></strong>
                    <span class="material-icons" style="transform: rotate(180deg); position: absolute; bottom: 5;">eject</span>
                </button>
                <div class="dropdown-content">
                    <a href="userprofile.php">Profile</a>
                    <?php if(isset($_SESSION['role'])) { ?>
                        <a href="../../Admin/PageTemplates/home.php"><?php echo $_SESSION['role']; ?> Panel</a>
                    <?php } ?>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        <?php } ?>
    </header>
