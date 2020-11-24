<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
</head>
<body>
    <header>
        <div class="roww">
            <div class="boxcenter_content">
                <div class="bg_header_content">
                    <div class="bg_menu_content">
                        <nav class="nav">
                            <div class="bg_logo_content">
                                <div class="text_logo">
                                   <a href="index.php?ctrl=home&act=index">EAC</a>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <a href="index.php?ctrl=wewillgo&act=index">Where will we go?</a>
                                    <a href="http://">Review</a>
                                    <a href="http://">About us</a>
                                </li>
                            </ul>
                            
                        </nav>
                        <div class="left_login">
                            <div class="float_text">
                                <a href="http://">Login</a>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="roww">
            <div class="img_content_header">
                <img src="img/countryside.png" alt="">
            </div>
    </div>

    <article>
        <div class="roww">
            <div class="boxcenter_content">

                <div class="bg_article">
                <div class="box_position_content1"></div>
                <!-- /* <div class="box_position_content2"></div> */ -->
                        <?php
                            foreach($topFeautureById as $tr){
                                echo'
                            <div class="box_content_article">
                          
                    
                                <div class="title_content">
                                    '.$tr['name_dd'].'
                                    <div class="line_title"></div>
                                </div>
                            
                                
                                <div class="border_box">
                               
                                    <div class="box_text_content0">
                                        
                                            <div class="box_text0">
                                    
                                                '.$tr['noidung'].'
                                    
                                            </div>
                                    </div>
                                </div>
                            
                        
                            </div>
                        <div class="box_img_article">
                            <div class="single-item">
                                
                                    <div class="box_img_slick">
                                        <img src="img/field.jpg" alt=""> 
                                    </div>
        
                                    <div class="box_img_slick">
                                        <img src="img/vinh ha long.jpg" alt="">
                                    </div>
                                
                                
                                   
                            </div>
                        </div>

                        <div class="main_content">
                     
                            <h3>About place</h3>
                      
                        <h5>Where is it?</h5>
                            <div class="box_text_content2">
                                
                                    '.$tr['noidung2'].'
                                
                            </div>
    
                            <div class="big_box_img_content">
                                <div class="box_img_content">
                                    <img src="img/'.$tr['img_noidung1'].'" alt=""> 
                                </div>
                            </div>
                                
                            <h5>Discover</h5>
                            <div class="box_text_content3">
                            
                                '.$tr['noidung3'].'
                            </div>
                                
                            <div class="big_box_img_content">
                                <div class="box_img_content">
                                    <img src="img/'.$tr['img_noidung2'].'" alt=""> 
                                </div>
                            </div>
                        <h5>My thinking</h5>
                            <div class="box_text_content3">
                            
                                '.$tr['noidung3'].'
                            </div>

                        </div>
                                ';
                            }
                        ?>

                </div>
            </div>
        </div>
    </article>

<div class="roww">
    <div class="bg_link_form">
        <div class="bg_text">
            Join with us!
        </div>


        <div class="bg-buy-add">
                        <div class="box_hover_a">
                        <a id="myBtn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            sign tour
                        </a>
                        </div>


                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="close">
                                    <span>&times;</span>
                                </div>
                                

                                <div class="boxPay">
                                    <form action="index.php?ctrl=cart&act=checkout&id='.$detail['id'].'" method="post" enctype="multipart/form-data">
                                        <div class="container">
                                            <h1>Book tour</h1>
                                                <hr>
                                                    <label for="fullname">Full name</label>
                                                    <input type="text" placeholder="Enter Email" name="fullName" required>

                                                    <label for="email">Email</label>
                                                    <input type="text" placeholder="Enter Email" name="email" required>

                                                    <label for="address">Address</label>
                                                    <input type="text" placeholder="Enter Address" name="address" required>
                                                        
                                                    <label for="phone">Phone number</label>
                                                    <input type="tel" placeholder="Enter Number" name="phone" required>
                                        
                                            <div class="clearfix">
                                                <button type="submit" class="button">Done!</button>
                                                <button type="button" id="cancel" class="button">Let's me think</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>




    </div>
</div>
    <div class="roww">
        <div class="boxcenter_content">
            <div class="box_choose">
                <div class="text_choose">
                    Choose us choose fun
                </div>
                <div class="line_comment"></div>
                <div class="small_text_choose">
                   We want to protect your expearence
                </div>
               
                <div class="box_choose_content">
                    <div class="bg_position_content3"></div>
                    <div class="bg_position_content4"></div>

                    <div class="box_infor">
                    
                        <div class="icon_title_choose">
                        
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="text_title_choose">
                                Place
                                <div class="line_title_choose"></div>
                        </div>
                        
                        <div class="box_text_choose">     
                                waoefk weofkewo fw eofk ew ofewkfo ewof wiaje awuefnwefwef we e
                                erafuygerygfyerugfy ery geryg 
                                
                        </div>
                       
                    </div>

                   

                    <div class="box_infor mt1">
                        <div class="icon_title_choose">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="text_title_choose">
                            plan
                            <div class="line_title_choose"></div>
                        </div>
                       
                        <div class="box_text_choose">     
                            waoefk weofkewo fw eofk ew ofewkfo ewof wiaje awuefnwefwef we e
                            erafuygerygfyerugfy ery geryg 
                            
                        </div>
                       
                    </div>
                    <div class="box_infor">
                        <div class="icon_title_choose">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="text_title_choose">
                            safe
                            <div class="line_title_choose"></div>
                        </div>
                        
                        <div class="box_text_choose">     
                            waoefk weofkewo fw eofk ew ofewkfo ewof wiaje awuefnwefwef we e
                            erafuygerygfyerugfy ery geryg 
                            
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--     <div class="roww">
        <div class="boxcenter_content">
            <div class="box_comment">
                <div class="text_comment">
                    What do you think?
                </div>
                <div class="line_comment"></div>
            </div>
        </div>
    </div> -->
    

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$('.single-item').slick({
    slidesToShow:1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
});
</script>