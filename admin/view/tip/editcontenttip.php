<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                    <form class="formedit" action="index.php?ctrl=tipnote&act=update" method='post' enctype="multipart/form-data">
                        
                        <?php

                            $id = $suanoidung['id_nd'];
                            $name1= $suanoidung['name_nd1'];
                            $name2= $suanoidung['name_nd2'];
                            $name3= $suanoidung['name_nd3'];
                            $name4= $suanoidung['name_nd4'];
                            $nd1= $suanoidung['noidung1'];
                            $nd2= $suanoidung['noidung3'];
                            $nd3= $suanoidung['noidung5'];
                            $nd4= $suanoidung['noidung7'];
                            $tipnote1=$suanoidung['noidung2']
                            $tipnote2=$suanoidung['noidung4']
                            $tipnote3=$suanoidung['noidung6']
                            $tipnote4=$suanoidung['noidung8']
                        ?>

                            <h1> Sửa nội dung</h1>
                        <div class="form_group">

                            <div class="form_content">
                                <label for="">ID nội dung</label>
                                <input type="text" readonly name='id' value="<?php echo"$id"?>" >
                            </div>

                            <div class="form_content">
                                <label for="">Tên nội dung 1</label>
                                <input type="text" name='name' value="<?php echo"$name2"?>">
                            </div>

                            <label for="">Đoạn 1</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd1"?></textarea>
                            </div>

                            <label for="">Tip note 1</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd2"?></textarea>
                            </div>


                            <div class="form_content">
                                <label for="">Tên nội dung 2</label>
                                <input type="text" name='name' value="<?php echo"$name2"?>">
                            </div>

                            <label for="">Đoạn 2</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd3"?></textarea>
                            </div>

                            <label for="">Tip note 2</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd4"?></textarea>
                            </div>


                            <div class="form_content">
                                <label for="">Tên nội dung 3</label>
                                <input type="text" name='name' value="<?php echo"$name3"?>">
                            </div>

                            <label for="">Đoạn 3</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd5"?></textarea>
                            </div>

                            <label for="">Tip note 3</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd6"?></textarea>
                            </div>


                            <div class="form_content">
                                <label for="">Tên nội dung 4</label>
                                <input type="text" name='name' value="<?php echo"$name3"?>">
                            </div>

                            <label for="">Đoạn 4</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd7"?></textarea>
                            </div>

                            <label for="">Tip note 4</label>
                            <div class="form_content">
                                <textarea name="" id="" cols="120" rows="10" value=""><?php echo"$nd8"?></textarea>
                            </div>

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