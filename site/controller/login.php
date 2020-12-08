<?php
     include_once 'model/login.php';
        include_once 'model/database.php';

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $mail=$_SESSION['admin'];
            $admin=getad($mail);
        include 'view/login/login.php';
        break;
    }


?>