<?php
    include_once 'model/review.php';
    
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $dd=getAlldd();
            $gt=getCTTourById_DD();
             include_once 'view/review/index.php'; 
        break;

        case 'chitiettour':
            $id_dd=$_GET['id_dd'];
            $gt=getCTTourById($id_dd);
            include 'view/review/chitiettour.php';
            break;

        case 'khachhang':
                $kh=getallKH();
                 include 'view/review/khachang.php';
                 break;
    ;

    }
?>