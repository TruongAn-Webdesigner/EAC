<?php
     include_once 'model/home.php';

    $action = 'index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
        $rv1 = getCountTour();
        $rv3 = getCountKH();
        include 'view/home/index.php';
        break;
    }
    
    
?>