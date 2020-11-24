<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAC Travel</title>

    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/statistical.css">
    <link rel="stylesheet" href="css/tour.css">
    <link rel="stylesheet" href="css/place.css">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/tip.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"><!-- font-family: 'Playfair Display', serif; -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!-- font-family: 'Noto Sans JP', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet"><!-- font-family: 'Tinos', serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"><!-- font-family: 'Josefin Sans', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"><!-- font-family: 'Varela Round', sans-serif; -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- jiqueri -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- boottrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

</head>
<body>

    <?php
        session_start();

        if(!isset($_SESSION['admin']))//kiem tra xem co dang nhap chua

        {

        header('location:login.php');

        }
    ?>
    <div class="full">
        <!-- ad_left -->
        <div class="ad_left">

            <!-- title_ad_left -->
                <div class="title_ad_left">
                    EAC TRAVEL
                </div>
            <!-- end title_ad_left -->

            <!-- dashboarid -->
                <div class="dashboarid">

                    <div class="title_db">
                        DASHBOARID
                    </div>

                    <div class="content_db">
                        <ul>
                            <li class="active"><a href="index.php" >Statistical</a></li>

                            <li>
                                <a href="#"  class="feat-btn">Data <i class="fas fa-chevron-down"></i></a>
                                    <ul  class="feat-show">
                                        <li><a href="index.php?ctrl=place"><i class="fas fa-angle-right"></i> Place</a></li>
                                        <li><a href="index.php?ctrl=review"><i class="fas fa-angle-right"></i> Review</a></li>
                                        <li><a href="index.php?ctrl=tipnote"><i class="fas fa-angle-right"></i> Tips note</a></li>
                                    </ul>
                                
                            </li>

                            <li>
                                <a href="#" class="serv-btn">E-commerce <i class="fas fa-chevron-down"></i></a>
                                    <ul  class="serv-show">
                                        <li><a href="index.php?ctrl=tour"><i class="fas fa-angle-right"></i> Tour</a></li>
                                    </ul>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            <!-- end dashboarid -->

            <!-- application -->

            <div class="dashboarid">

                <div class="title_db">
                   APPLICATION
                </div>

                <div class="content_db">
                    <ul>
                        <li><a href="#" >Mail</a></li>
                    </ul>
                </div>
            </div>

            <!-- end application -->

        </div>
        <!-- end ad_left -->

        <!-- ad_right -->
            <div class="ad_right">
                <div class="full">
                    <div class="top_ad_right">
                        <?php 
                            include_once 'model/login.php';

                            $mail=$_SESSION['admin'];
                            $admin=getad($mail);
                            
                            foreach($admin as $ad){
                                echo''.$ad['name_ad'].'';
                            }
                        ?>
                    </div>
                </div>
            <?php       
            $ctrl='home';
            if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
            }

            include 'controller/'.$ctrl.'.php';
        ?>
            </div>
        <!-- end ad_right -->
    </div>



      <!-- java script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


      <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('.content_db ul .feat-show').toggleClass("show");
        $('.content_db ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('.content_db ul .serv-show').toggleClass("show1");
        $('.content_db ul .second').toggleClass("rotate");
      });
      $('.content_db ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>

        
</body>
</html>