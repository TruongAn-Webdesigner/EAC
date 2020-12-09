
<?php

    include_once 'model/tip.php';
    $action='index';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }

    switch($action){
        case 'index':
            $tipadmin = getAllTip();
            include 'view/tip/index.php';
        break;
        /* phan tip noi dung */
        case'noidungtip':
            $id=$_GET['id'];
            /*bat loi noi dung  */
            $tipadminnoidung = getTipNoidungById($id);
            if($tipadminnoidung['trangthai']==0){
                echo'
                <script>alert("Bạn chưa nhập cái gì cả")</script>'
                ;
                    
                include 'view/tip/addcontenttip.php';
            }else{
                $tipnoidungadmin=getAllTipByIdAdmin($id);
                include 'view/tip/contenttip.php';
        }
        break;

        /* them noi dung */
        case'addnoidungtip':
            $id=$_POST['id'];
            $name1=$_POST['name'];
            updateTipTrangThai($id);
            addContentTip($id,$name1);
            echo'<script>window.location="index.php?ctrl=tipnote&act=noidungtip&id='.$id.'";</script>';
        break;



        /* sua noi dung tip */
        case'insert_editcontenttip':
            $id=$_GET['idtip'];
            $suanoidung=getTipContentById($id);
            include 'view/tip/editcontenttip.php';
        break;

        case'edit_content_tip':
            $id=$_POST['id'];
            $name_nd1=$_POST['name'];
            $name_nd2=$_POST['name'];
            $name_nd3=$_POST['name'];
            $name_nd4=$_POST['name'];
            $noidung1=$_POST['name'];
            $noidung2=$_POST['name'];
            $noidung3=$_POST['name'];
            $noidung4=$_POST['name'];
            $noidung5=$_POST['name'];
            $noidung6=$_POST['name'];
            $noidung7=$_POST['name'];
            $noidung8=$_POST['name'];
            updateNoiDungTip($id,$name_nd1,$name_nd2,$name_nd3,$name_nd4,$noidung1,$noidung2,$noidung3,$noidung4,$noidung5,$noidung6,$noidung7,$noidung8);
            echo'<script>window.location="index.php?ctrl=tipnote&act=index";</script>';
        break;

        case 'add':
            include 'view/tip/addnew.php';
        break;

        case 'insert':
            $name_tip=$_POST['name'];
            $img = $_FILES['file_name']['name'];

            $path = '../site/img/'.$img;

            if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
                addTip($name_tip,$img);//them vao databse
               }
               
               /* chuyển trang bằng js */
               echo'<script>window.location="index.php?ctrl=tipnote&act=index";</script>';
        break;

        case 'ct':
            include_once 'view/tip/boxtip.php';
        break;

        case 'edit':
            $id = $_GET['id'];
            $kv = getTipID($id);
            include 'view/tip/editTip.php';
        break;



        case 'update':
            $id= $_POST['id'];
            $name =$_POST['name'];
            $img= $_FILES['file_name']['name'];
            $path = '../site/img/'.$img;
          if($img!=""){
              move_uploaded_file($_FILES['file_name']['tmp_name'],$path);
              updateTiphinh($id,$name,$img);//them vao databse
          }else{
            updateTip($id,$name);
          }
          echo'<script>window.location="index.php?ctrl=tipnote&act=index";</script>';
          break;

        

        case 'del':
            $id = $_GET['id'];
            $delete=deleteTip($id);
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
                window.location.href ="index.php?ctrl=tipnote";
                });
                </script>';
            }else{
            echo'
            <script type="text/javascript">
                swal({
                title: "Error!",
                text: "Không xóa được vì tồn tại khách hàng.",
                type: "error",
                timer: 5000,
                showConfirmButton: true
                }, function(){
                window.location.href = "index.php?ctrl=tipnote";
                });
                </script>';
            }
            $tip = getAllTip();
            include 'view/tip/index.php';

            
    }
?>