<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips note</title>
    <link rel="stylesheet" href="css/tip.css">
    
</head>
<body>

<header>
    <div class="roww">
        <div class="bg_all">
            <div class="boxcenter">

                <div class="menu_wwwg">

                    <div class="logo_wwwg">
                            <a href="index.php">EAC</a>

                            <a href="index.php?ctrl=wewillgo">where will we go</a>
                            <a href="index.php?ctrl=tip">Tips</a>
                            
                    </div>
                    <div class="menu_link">
                        <div class="link_right">
                            <a href="http://">login</a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</header>



<!-- phan background -->
    <div class="roww">
        <div class="bg_background">
            <div class="box_img_background">
                <img src="img/tip.jpg" alt="">
               
            </div>

           

</div>
        
</div>



<!-- phan feature -->
    <div class="roww">
        <div class="boxcenter position">
            <div class="bg_feature">
                <div class="bg_feature_item">
            
                    <div class="slick_picture">
                                    <div class="text_feature">
                                        Tips note 
                                    </div>
                                    <div class="small_text_tip">
                                        Cùng tìm hiểu những mẹo cần lưu ý cho chuyến hành trình bạn nhé.
                                    </div>
                        <div class="box_picture">
            
                                        <div class="boxnextback">
                                                    <div class="next_wwwg"><i class="fa fa-chevron-left prevwwg" aria-hidden="true"></i></div>
                                                    <div class="back_wwwg"><i class="fa fa-chevron-right nextwwg" aria-hidden="true"></i></div>
                                        </div>
                                <div class="bgitem">
                                     
                                    <div class="box_item">
                                        <div class="center">
                                        <?php
                                            foreach($topFeauture as $tf){
                                                echo '
                                                <div class="fr_box">
                                            
                                                <div class="fr_img">
                                                    <div class="bg">
                                                        <img src="img/'.$tf['img_dd'].'" alt="">
                                                    </div>
                                                </div>
    
                                                <div class="fr_name">
                                                    <a href="index.php?ctrl=wewillgo&act=content&idcontent='.$tf['id_dd'].'">
                                                    <span>'.$tf['name_dd'].'</span>
                                                    </a>
                                                </div>
                                            </div>
                                                ';
                                            }
                                        ?>
                                        

                                        
                                        <!-- <div class="fr_box">
                                            
                                            <div class="fr_img">
                                                <div class="bg"></div>
                                            </div>

                                            <div class="fr_name"><span>MIKE2</span> /CFO</div>

                                        </div>


                                        <div class="fr_box">
                                            
                                            <div class="fr_img">
                                                <div class="bg"></div>
                                            </div>

                                            <div class="fr_name"><span>MIKE3</span> /CFO</div>

                                        </div>



                                        <div class="fr_box">
                                            
                                            <div class="fr_img">
                                                <div class="bg"></div>
                                            </div>

                                            <div class="fr_name"><span>MIKE4</span> /CFO</div>

                                        </div>

                                        <div class="fr_box">
                                            
                                            <div class="fr_img">
                                                <div class="bg"></div>
                                            </div>

                                            <div class="fr_name"><span>MIKE5</span> /CFO</div>

                                            </div>
                                        </div> -->

                                        
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<!-- phan 3 box -->



<article>
    <!-- <div class="roww">
        <div class="boxcenter">
            <div class="bg_review">
                <div class="box_review">
                    <div class="text_tips">
                        Review
                    </div>
                    <div class="small_text_tip">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using 
                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                    </div>
                    <div class="line_review"></div>
                    <div class="box_infor_review">
                                    <div class="slide_tn">
                                       
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/field.jpg" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                        <div class="box_tn">
                                           <div class="img_tn">
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                           </div>
                                        </div>
                                        <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">    
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                           
                                       </div>
                                       
                                      
                                       <div class="box_tn">
                                           <div class="img_tn">

                                           
                                               <div class="bg_review_list">
                                               <figure class="figurefx pushup">
                                                    <img src="img/flower.png" alt="">
                                                    <figcaption>
                                                        <a href=""><i class="fas fa-search"></i></a>                                    
                                                        <a href=""><i class="fas fa-location-arrow"></i></a>
                                                    </figcaption>
                                                 
                                               </figure>
                                               </div>
                                            </div>
                                           <div class="box_infor">
                                                <div class="name_tn"><span>MIKE</span> /CFO</div>
                                                <div class="rating_infor_review">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>

                                           
                                           
                                       </div>

                                       
                                       
                                   </div>

                                   
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="roww">
        <div class="bg_review">
            <div class="boxcenter"> 
                <div class="bg_box_review">
                    
                    <div class="bg_in-box_review">
                            <div class="title_wwwg_review">
                            DISCOVER
                            </div>
                        <?php
                            foreach($allPlace as $ap){
                                echo'
                                <div class="bg_box_item">
                            
                                <div class="bg_img_item">
                                    <img src="img/'.$ap['img_dd'].'" alt="">
                                </div>
                                <div class="bg_text_item">
                                    
                                   <div class="title_kv_item">
                                       <div class="kv_item">
                                            '.$ap['name_kv'].'
                                       </div>
                                   </div>
                                    <div class="title_text_item">
                                        <div class="text_item">
                                        <a href="index.php?ctrl=wewillgo&act=content&idcontent='.$ap['id_dd'].'">'.$ap['name_dd'].'</a> 
                                        </div>
                                    </div>
                                    <div class="date_item">
                                        <div class="float_date">
                                            '.$ap['ngaydang'].'
                                        </div>
                                    </div>
                                   
                                   
                    
                                    <div class="title_view_item">
                                        <div class="view_item"></div>
                                        <div class="rating_item">
                                            rating:   '.$ap['rating'].'
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                ';
                            }
                        ?>
                        
                        
<!--                         <div class="bg_box_item">
                            
                        </div>  

                        <div class="bg_box_item">
                            
                        </div>  

                        <div class="bg_box_item">
                            
                        </div>  

                        <div class="bg_box_item">
                            
                        </div>

                        <div class="bg_box_item">
                            
                        </div>   -->
                    </div>
                    
<!--                     <div class="title_wwwg_review">

                        <div class="title_r_review">
                            R
                            <div class="title_plus_review">
                                eview 
                            </div>   
                        </div>
                        
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</article> 
 
<!-- <article>
    <div class="roww">
        <div class="boxcenter">
            <div class="bg_review"></div>
        </div>
    </div>
</article> -->
</body>
</html>