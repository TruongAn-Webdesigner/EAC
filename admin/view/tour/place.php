<!-- 
    <h2 class="tourt">Địa điểm</h2>
    <div class="boxcentert">
        <div class="boxt">
            <div class="imgt">
                <img src="../site/img/lisa.jpg" alt="">              
            </div>
            <div class="tentour">
                <a href="index.php?ctrl=tour&act=tour">G-Dragon - Without You ft. Rosé (Color Coded Lyrics)</a>               
            </div>
            
            
        </div>
        <div class="boxt">
            <div class="imgt">
                <img src="../site/img/lisa.jpg" alt="">              
            </div>
            <div class="tentour">
                <a href="index.php?ctrl=tour&act=tour">G-Dragon - Without You ft. Rosé (Color Coded Lyrics)</a>               
            </div>
        
        </div>
        <div class="boxt">
            <div class="imgt">
                <img src="../site/img/lisa.jpg" alt="">              
            </div>
            <div class="tentour">
                <a href="index.php?ctrl=tour&act=tour">G-Dragon - Without You ft. Rosé (Color Coded Lyrics)</a>               
            </div>
        
        </div>
        <div class="boxt">
            <div class="imgt">
                <img src="../site/img/lisa.jpg" alt="">              
            </div>
            <div class="tentour">
                <a href="index.php?ctrl=tour&act=tour">G-Dragon - Without You ft. Rosé (Color Coded Lyrics)</a>               
            </div>
        
        </div>
    </div>
 -->

<div class="full">
    <div class="boxcenter_statis">
        <div class="box_view_place">
                     <div class="title_view_ad">

                        <div class="text_view_place">
                            <span>Địa Điểm</span> <br>
                            Danh Sách Các Địa Điểm 
                        </div>
                        
                        <div class="btn_tour">
                                <select class="form-control form-control-lg fl ">
                                    <?php
                                        foreach($kv as $kv){
                                            echo'
                                            <a href="index.php?ctrl=home"><option value='.$kv['id_kv'].'>'.$kv['name_kv'].'</option></a>
                                            ';
                                        }
                                    ?>
                                </select>
                                <div class="btn_place">
                                    <a href="index.php?ctrl=place&act=add">Add Place </a>
                                </div>
                        </div>

                    </div>

                    <div class="full">
                        <div class="boxcenter_statis">
                            <div class="content_view_ad">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên Địa Điểm</th>
                                            <th scope="col">rating</th>
                                            <th scope="col">Khu Vực</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Del</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            foreach($dd as $dd){
                                                echo'
                                                    <tr>
                                                        <td scope="row">'.$dd['id_dd'].'</td>
                                                        <td>'.$dd['name_dd'].'</td>
                                                        <td>'.$dd['rating_dd'].'</td>
                                                        <td>'.$dd['name_kv'].'</td>
                                                        <td><button type="button" class="btn btn-outline-success">Success</button></td>
                                                        <td><button type="button" class="btn btn-outline-danger">Danger</button></td>
                                                    </tr>
   
                                                ';
                                            }

                                        ?>
                                       
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

               
        </div>
    </div>
</div>