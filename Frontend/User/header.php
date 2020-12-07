<?php 

  require('../../../function.php');

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../Css/itemProfile.css">
    <link rel="stylesheet" href="../Css/menu.css">
    <link rel="stylesheet" href="../Css/rprofile.css"/>
    <link rel="stylesheet" href="../Css/userprofile.css"/>
    <link rel="stylesheet" href="../Css/reservation.css"/>
    <link rel="stylesheet" href="../Css/cart.css"/>
    <link rel="stylesheet" href="../Css/feedback.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
        
       

            <a href="http://localhost/zwiggy/landing.php" class="logout">logout</a>
        
        


    </header>

    

<<<<<<< HEAD
        <button class="logout" style="display: flex;">
            <p>Log Out</p>
            <span class="material-icons">login</span>
        </button>
    </header>
=======
    
>>>>>>> e565a61312dc5c9618c13f1cd9d4338c319cdcff
