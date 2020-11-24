<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
            session_start();
            $db = new PDO("mysql:host=localhost;dbname=eac",'root','');
            if(isset($_POST['DangNhap'])){
                $user=$_POST['username'];
                $pass=$_POST['password'];
                $sql = "select * from admin where email='$user' and pass='$pass'";
                $kq = $db ->query($sql);
                $num = $kq->rowCount();
                if($num>0){
                    $_SESSION['admin']=$user;
                    header('location:../admin/index.php');
                }else{
                    echo 
                    '<script>
                    swal("Tài khoản không tồn tại","Vui lòng kiểm tra lại mật khẩu","error");
                    </script>
                    ';
                }
            }
    ?>
    <div class="box">
            <form method="post" action="" onsubmit="return validate()">
                <h2>ĐĂNG NHẬP</h2>
                <input type="text" name="username" id="username" placeholer="Nhập tài khoản" >
                <input type="password" name="password" id="password" placeholer="Nhập mật khẩu">
                
                <input type="submit" name="DangNhap" value="Đăng nhập">  
            </form>
        </div>
</body>
</html>