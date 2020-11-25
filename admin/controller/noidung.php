<?php
     include_once 'model/home.php';
     include_once 'model/admin.php';
     include_once 'model/login.php';
    

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $id=$_GET['id'];
        $topFeautureById=getAllTopFeautureById($id);
        include 'view/noidung/index.php';
        break;
    }

    


?>
