<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/usertour.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
        <div class="roww">
        <div class="bg_header_content">
            <div class="boxcenter_content_tip">
                
                    <div class="bg_menu_content">
                        <nav class="navuser">
                            <div class="bg_logo_content">
                                <div class="text_logo">
                                    <a href="index.php?ctrl=home&act=index">EAC</a>
                                    <a href="index.php?ctrl=wewillgo&act=index">Where will we go?</a>
                                    
                                    <a href="http://">Tip</a>
                                </div>
                            </div>
                
                            
                        </nav>
                        <div class="left_loginuser">
                            <div class="float_text">
                            
                            <?php
                                                if(!isset($_SESSION['user']))//kiem tra xem co dang nhap chua
                                                    {
                                                        echo'<a href="view/login/login.php">login</a>';
                                                    } else{
                                                            include_once 'model/login.php';
                                                            $kh_login=$_SESSION['user'];
                                                            $khachhang=getkh($kh_login);

                                                            /* foreach($khachhang as $ad){
                                                                echo''.$ad['name_ad'].'';
                                                            } */
                                                            foreach ($khachhang as $ad) {
                                                                echo'
                                                                <div class="dropdown">
                                                                    <ul>
                                                                        <li><a href="#">'.$ad['name_kh'].' <i class="fa fa-caret-down" style="font-size:17px;color:black"></i></a>
                                                                            <div class="nav_ad_con">
                                                                                    <ul>
                                                                                       
                                                                                        <li><a href="view/login/logout.php">Đăng Xuất</a></li>
                                                                                    </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                ';
                                                            }
                                                        }
                                                ?>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </header>


    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                <form action="#" method="post">
                    <div class="card mt-3">
                        <div class="card-header">
                        
                        </div>
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <td>Mã tour</td>
                                        <td>Tên khách hàng</td>
                                        <td>Địa điểm</td>
                                        <td>Ngày đi</td>
                                    </tr>
                            
                                <?php?>

                                </table>
                </form>

                </div>
            </div>
        </div>
    </article>
</body>
</html>