<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/booktour.php';
$action = 'index';
if(isset($_GET['act'])){
    $action=$_GET['act'];
}

switch($action){
    case 'index':
    $topFeauture=getAllTopFeauture();
    $allPlace=getAllPlace();
    include_once 'view/wherewillwego/index.php';
    break;

    case 'content':
    $id=$_GET['idcontent'];
    $topFeautureById=getAllTopFeautureById($id);

    include 'view/content/content.php';
    break;

    case 'booktour':
        $id=$_GET['idcontent'];
        $topFeautureById=getAllTopFeautureById($id);
        //luu thong tin don hang
        $fname=$_POST['fullName'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $diadiem=$_POST['diadiem'];
        $ngaydat=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
        $madh=addToOrder($fname,$address,$email,$phone,$diadiem,$ngaydat);
        include 'view/content/content.php';
    break;

        case 'booklogin':
            $id=$_GET['idcontent'];
            $topFeautureById=getAllTopFeautureById($id);
            //luu thong tin don hang
        $fname=$_POST['fullName'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $diadiem=$_POST['diadiem'];
        $ngaydat=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
    
}

?>