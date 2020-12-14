<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                    <form class="formedit" action="index.php?ctrl=tour&act=suanoidungtour&id=<?php echo"$id"?>" method='post' enctype="multipart/form-data">
                       
                        <?php
                             /* <!-- phan lay thong tin tu act editnoidungtour trong tour --> */
                            $id = $suanoidungtour['id_dd'];
                            $nd1= $suanoidungtour['noidung'];
                            $nd2= $suanoidungtour['noidung2'];
                            $nd3= $suanoidungtour['noidung3'];
                            $hinhnd1= $suanoidungtour['img_noidung1'];
                            $hinhnd2= $suanoidungtour['img_noidung2'];
                            $hinhfood1= $suanoidungtour['img_food1'];
                            $hinhfood2= $suanoidungtour['img_food2'];
                            $hinhfood3= $suanoidungtour['img_food3'];
                           /*  $nd4= $suanoidungtour['noidung7'];
                            $tipnotefix1=$suanoidungtour['noidung2'];
                            $tipnotefix2=$suanoidungtour['noidung4'];
                            $tipnotefix3=$suanoidungtour['noidung6'];
                            $tipnotefix4=$suanoidungtour['noidung8']; */
                        ?>

                            <h1> Sửa nội dung tour</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <label for="">ID nội dung</label>
                                <input type="text" readonly name='id' value="<?php echo"$id"?>" >
                            </div>

                    

                            <label for="">Nội dung 1</label>
                            <div class="form_content">
                                <textarea name="name1" id="" cols="120" rows="10" value=""><?php echo"$nd1"?></textarea>
                            </div>

                            <label for="">Hinh 1</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhnd1"?>" alt="">
                            </div>

                            <label for="">chon hinh moi:</label>
                            <div class="file_edittip">
                                <label for="file">Chosse file</label>
                                <input multiple type="file" name='hinh1' id='file'>
                            </div>
 
                            <label for="">Nội dung 2</label>
                            <div class="form_content">
                                <textarea name="name2" id="" cols="120" rows="10" value=""><?php echo"$nd2"?></textarea>
                            </div>

                            
                            <label for="">Hinh 2</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhnd2"?>" alt="">
                            </div>

                            <label for="">chon hinh moi:</label>
                            <div class="file_edittip">
                                <label for="file2">Chosse file</label>
                                <input multiple type="file" name='hinh2' id='file2'>
                            </div> 

                            <!-- phan food -->
                            
                            <label for="">Hình đồ ăn 1</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood1"?>" alt="">
                            </div>

                            <label for="">chon hinh food1 moi:</label>
                            <div class="file_edittip">
                                <label for="file3">Chosse file</label>
                                <input multiple type="file" name='hinhfood1' id='file3'>
                            </div> 

                            <label for="">Hình đồ ăn 2</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood2"?>" alt="">
                            </div>

                            <label for="">chon hinh food2 moi:</label>
                            <div class="file_edittip">
                                <label for="file4">Chosse file</label>
                                <input multiple type="file" name='hinhfood2' id='file4'>
                            </div> 

                            <label for="">Hình đồ ăn 3</label>
                            <div class="form_content">
                                <img src="../site/img/<?php echo"$hinhfood3"?>" alt="">
                            </div>

                            <label for="">chon hinh food3 moi:</label>
                            <div class="file_edittip">
                                <label for="file5">Chosse file</label>
                                <input multiple type="file" name='hinhfood3' id='file5'>
                            </div> 

                            <label for="">Nội dung 3</label>
                            <div class="form_content">
                                <textarea name="name3" id="" cols="120" rows="10" value=""><?php echo"$nd3"?></textarea>
                            </div>

                            <div class="btn_luuedit">
                                <button name='btn_luu' class='btnluu_edittip'>Lưu</button>
                            </div>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>