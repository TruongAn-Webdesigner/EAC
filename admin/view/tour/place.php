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
 <script>
$(document).ready(function(){
  $("#timkiem").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#search tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<div class="full">
    <div class="boxcenter_statis">
        <div class="box_view_place">
                     <div class="title_view_ad">

                        <div class="text_view_place">
                            <span>Địa Điểm</span> <br>
                            Danh Sách Các Địa Điểm 
                        </div>

                        <div class="search">
                        <input id="timkiem" type="text" placeholder="Search..">
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
                                    <a href="index.php?ctrl=tour&act=add">Add Place </a>
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
                                    <tbody id="search">

                                        <?php

                                            foreach($dd as $dd){
                                                echo'
                                                    <tr>
                                                        <td scope="row">'.$dd['id_dd'].'</td>
                                                        <td><a href="index.php?ctrl=noidung&id='.$dd['id_dd'].'" class="tendd">'.$dd['name_dd'].'</a></td>
                                                        <td>'.$dd['rating_dd'].'</td>
                                                        <td>'.$dd['name_kv'].'</td>
                                                        <td><button type="button" class="btn btn-outline-success"><a href="index.php?ctrl=tour&act=edit&id='.$dd['id_dd'].'">Edit</a></button></td>
                                                        <td><button type="button" class="btn btn-outline-danger"><a href="index.php?ctrl=tour&act=del&id='.$dd['id_dd'].'">Del</a></button></td>
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
