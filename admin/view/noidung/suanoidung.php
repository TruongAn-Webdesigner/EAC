<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                   
                    <form class="formedit" action="index.php?ctrl=tour&act=edit_content_review&id=<?php echo"$id"?>" method='post' enctype="multipart/form-data">
                        
                        <?php

                            $id = $suanoidungreview['id_dd'];

                            /* $name4= $suanoidung['name_nd4']; */
                            $noidung1= $suanoidungreview['noidung'];
                            $noidung2= $suanoidungreview['noidung2'];
                            $noidung3= $suanoidungreview['noidung3'];
                            /* $nd4= $suanoidung['noidung7']; */

                        ?>

                            <h1> Sửa nội dung</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <label for="">ID nội dung</label>
                                <input type="text" readonly name='id' value="<?php echo"$id"?>" >
                            </div>


                            <label for="">Đoạn 1</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""><?php echo"$noidung1"?></textarea>
                            </div>

                    


                           

                            <label for="">Đoạn 2</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""><?php echo"$noidung2"?></textarea>
                            </div>


                            

                            <label for="">Đoạn 3</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""><?php echo"$noidung3"?></textarea>
                            </div>

                            <!-- <label for="">Tip note 3</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""></textarea>
                            </div>


                            <div class="form_content">
                                <label for="">Tên nội dung 4</label>
                                <input type="text" name='name' value="">
                            </div>

                            <label for="">Đoạn 4</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""></textarea>
                            </div>

                            <label for="">Tip note 4</label>
                            <div class="form_content">
                                <textarea name="name" id="" cols="120" rows="10" value=""></textarea>
                            </div> -->

                            <div class="file_edittip">
                                <label for="file">Chosse File</label>
                                <input type="file" name='file_name' id='file'>
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