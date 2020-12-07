<?php
    require('db.php');
    require('Queries.php');

    $db = new DB();

    $data = new Queries($db);
?>