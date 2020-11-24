<!-- 
<h2>TIPS NOTE</h2>
<div class="boxadd">
    <form action="">
        <input type="submit"value="Add">
        <input type="submit"value="Delete">
        <input type="submit"value="Edit">
    </form>
</div>

<div class="boxtip">
    <a class="box_count_tip" href="index.php?ctrl=tipnote&act=ct">Box count tip</a>
    <a class="box_count_view_tip" href="index.php?ctrl=tipnote&act=ct">Box count view tip</a>
    <a class="rank_tip" href="index.php?ctrl=tipnote&act=ct">Rank tip</a>
</div>
</div> -->

<!--  -->

<div class="full">
    <div class="boxcenter_statis">
        <div class="box_view_place">
                     <div class="title_view_ad">

                        <div class="text_view_place">
                            <span>Địa Điểm</span> <br>
                            Danh Sách Các Địa Điểm 
                        </div>
                        
                        <div class="btn_tip">
                                <div class="btn_place ">
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
                                            <th scope="col">Tên Tip</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Del</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            foreach($tip as $dd){
                                                echo'
                                                    <tr>
                                                        <td scope="row">'.$dd['id_tip'].'</td>
                                                        <td>'.$dd['name_tip'].'</td>
                                                        <td><button type="button" class="btn btn-outline-success">Edit</button></td>
                                                        <td><button type="button" class="btn btn-outline-danger">Del</button></td>
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
