<?php

include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
include_once 'model/booktour.php';
include_once 'model/login.php';
include_once 'model/xuly.php';

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
    $email_kh=$_SESSION['user'];/* lấy email của khách hàng */
    $khachhang=getkh_id($email_kh); /* từ email để truy cập vào database lấy thông ti của khách hàng */
    $id_kh=$khachhang['id_kh'];/* lấy id khách hàng */
    $kh_dg=getKH_DG($id_kh,$id);
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

    case 'contentbestplace':
    include_once 'view/content/content.php';
    break;

    case 'rating':
    $rtm=$_POST['rate']; /* lấy số sao mới */
    $email_kh=$_SESSION['user'];/* lấy email của khách hàng */
    $khachhang=getkh_id($email_kh); /* từ email để truy cập vào database lấy thông ti của khách hàng */
    $id_kh=$khachhang['id_kh'];/* lấy id khách hàng */
    $id_dd = $_GET['id_dd'];
    addRT($id_dd,$id_kh,$rtm);


    $place=getplacebyID_one($id_dd);
    $rtc=$place['rating_dd'];
    $sl=$place['sl'];
    $rt=(($rtc*$sl)+$rtm)/($sl+1);
    $sl+=1;
    update_DD_RT($rt,$id_dd,$sl);

    $topFeautureById=getAllTopFeautureById($id_dd);
    $kh_dg=getKH_DG($id_kh,$id_dd);
    header('location:index.php?ctrl=wewillgo&act=content&idcontent='.$id_dd.'');
    break; 

}

?>
