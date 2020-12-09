<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where will we go</title>
    <link rel="stylesheet" href="css/wherewillwego.css">
    <script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"view/wherewillwego/fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
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
                            <a href="index.php?ctrl=content-tip&act=index">Tips</a>
                            
                    </div>
                    <div class="menu_link">
                        <div class="link_right">
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
                                                                                        <li><a href="changespass.php">Đổi Mật Khẩu</a></li>
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



<!-- phan background -->
    <div class="roww">
        <div class="bg_background">
            <div class="box_img_background">
                <div class="boxcenter">
                    <div class="bg_3box">
                        <div class="box_img_3box">
                            <div class="container">
                                <p class="typewriter">
                                    <span class="typewriter-text" data-text='[ "You want to discover?. ", "This is your first time?. ", "No Problem.","We will help you think!." ]'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="bg_hot_item">
                <div class="boxcenter">
                    <div class="box_hot_item">
                        <div class="hot_item1">
                            <div class="hot_img_item">
                                <img src="img/vinh ha long.jpg" alt="">
                            </div>
                            <div class="hot_text_item">
                                <div class="hot_text1">
                                    <span>Đà</span> Nẵng
                                </div>
                            </div>
                        </div>

                        <div class="hot_item2">
                            <div class="hot_img_item">
                                <img src="img/field.jpg" alt="">
                            </div>
                            <div class="hot_text_item">
                                <div class="hot_text2">
                                    TP. <span>HCM</span>
                                </div>
                            </div>
                        </div>


                        <div class="hot_item3">
                            <div class="hot_img_item">
                                <img src="img/london.jpg" alt="">
                            </div>
                            <div class="hot_text_item">
                                <div class="hot_text3">
                                   <span>Hà</span>   Nội
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="roww">
        
</div>



<!-- phan feature -->
    <div class="roww">
        <div class="boxcenter position">
            <div class="bg_feature">


                <div class="bg_feature_item">
            
                    <div class="slick_picture">
                                    <div class="text_feature">
                                        Feature review 
                                    </div>
                                    <div class="small_text_tip">
                                    Cùng tìm hiểu những khu vực đáng để đi nhất bạn nhé.
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
                        <!-- Search form -->
                        <div class="md-form active-purple-2 mb-3">
                          
                            <div class="icon_search">
                                <i class="fas fa-search"></i>
                            </div>
                            <input name="search_text" id="search_text"  class="form-control" type="text" placeholder="Search..">
                           
                            
                        </div><br>
                        <div class="bg_in-box_review">
                            <div class="title_wwwg_review">
                            DISCOVER
                            </div>
                        <!-- --------------------- -->
                        <div id="result"></div> 
                        <!-- cái này hiện mấy cái box địa điểm ra đó nha ai lóp du -->
                   
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
                                        <div class="rating_item">
                                            rating:   '.$ap['rating'].'
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                ';
                            }
                        ?>
                        <!-- hihihi -->
                        
                        
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