<?php
    include_once 'model/database.php';
    include_once 'model/content.php';
    include_once 'model/wherewillwego.php';
    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        include 'view/login/login.php';
        break;

    }
 
?>