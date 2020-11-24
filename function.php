<?php
    require('db.php');
    require('GetData.php');

    $db = new DB();

    $data = new GetData($db);
?>