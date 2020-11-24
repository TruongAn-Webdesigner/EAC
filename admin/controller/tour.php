<?php
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
switch ($action) {
    case 'index':
        # code...
        include 'view/tour/place.php';
        break;
    case 'tour':
        # code...
        include 'view/tour/tour.php';
        break;
    case 'go_tour':
        # code...
        include 'view/tour/go_tour.php';
        break;
    default:
        # code...
        break;
}


?>