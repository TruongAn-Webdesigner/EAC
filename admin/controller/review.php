<?php
    
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            include_once 'view/review/index.php';
        break;
    }
?>