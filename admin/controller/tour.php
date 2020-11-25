<?php

    include_once 'model/place.php';
    include_once 'model/tour.php';

    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch ($action) {
    case 'index':
        $kv=getAllKV();
        $dd=getAlldd();
        include 'view/tour/place.php';
        break;

    case 'add':
        $kv=getAllKV();
        include_once 'view/tour/addnewtour.php';
    break;

    case 'insert':
        $name=$_POST['name'];
        $id_kv=$_POST['id'];
        $img = $_FILES['file_name']['name'];

        $path = '../site/img/'.$img;

        if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
            addTour($name,$id_kv,$img);//them vao databse
           }

           /* chuyển trang bằng js */
           echo'<script>window.location="index.php?ctrl=tour&act=index";</script>';
    break;

    case 'edit':
        $id = $_GET['id'];
        $dd = getDDID($id);
        $kv=getAllKV();
        include 'view/tour/edittour.php';
    break;

    case 'update':
        $id= $_POST['id'];
        $name =$_POST['name'];
        $id_kv=$_POST['id_cata'];
        $img= $_FILES['file_name']['name'];
        $path = '../site/img/'.$img;
      if($img!=""){
          move_uploaded_file($_FILES['file_name']['tmp_name'],$path);
          updateTourhinh($id,$name,$img,$id_kv);//them vao databse
      }else{
        updateTour($id,$name,$id_kv);
      }
      echo'<script>window.location="index.php?ctrl=tour&act=index";</script>';
      break;

    case 'del':
        $id = $_GET['id'];
        $delete=deleteTour($id);
        if ($delete) {
        echo'
        <script type="text/javascript">
            swal({
            title: "Success!",
            text: "Ban đã xoa thành công.",
            type: "success",
            timer: 2000,
            showConfirmButton: true
            }, function(){
            window.location.href ="index.php?ctrl=tour";
            });
            </script>';
        }else{
        echo'
        <script type="text/javascript">
            swal({
            title: "Error!",
            text: "vui Lòng Xóa Nội dung của địa điểm trước",
            type: "error",
            timer: 5000,
            showConfirmButton: true
            }, function(){
            window.location.href = "index.php?ctrl=tour";
            });
            </script>';
        }
        $kv=getAllKV();
        $dd=getAlldd();
        include 'view/tour/place.php';



/* 
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
        break; */
}


?>