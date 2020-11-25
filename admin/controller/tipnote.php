
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