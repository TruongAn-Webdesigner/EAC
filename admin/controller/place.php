<?php
    include_once 'model/place.php';

    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $kv=getAllKV();
            include_once 'view/place/place.php';
        break;

        case 'add':
            include_once 'view/place/addnew.php';
        break;

        case 'insert':
            $name_kv=$_POST['name'];
            $img = $_FILES['file_name']['name'];

            $path = '../site/img/'.$img;

            if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
                addKV($name_kv,$img);//them vao databse
               }

               /* chuyển trang bằng js */
               echo'<script>window.location="index.php?ctrl=place&act=index";</script>';
        break;

    }
?>