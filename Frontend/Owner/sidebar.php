<?php 
    require('../../../function.php');

    session_start();
    if($_SESSION['role'] !== 'owner'){
        echo '<script>location.href = "../../User/pageTemplates/menu.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./table.css">
    <?php echo $css; ?>
    
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
                <li><a href="./menu.php">Menu</a></li>
                <li><a href="./tables.php">Tables</a></li>
                <li><a href="./feedback.php">Feedback</a></li>
                <li><a href="./hotel.php">Hotel settings</a></li>
            </ul>
        </div>
        <div class="main">
            
        