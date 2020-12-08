<?php
     include_once 'model/login.php';
        include_once 'model/database.php';

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
