
<?php
    include_once 'model/tip.php';
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $tip = getAllTip();
            include 'view/tip/index.php';
        break;

        case 'ct':
            include_once 'view/tip/boxtip.php';
        break;
    }
?>