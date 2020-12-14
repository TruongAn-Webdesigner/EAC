<div class="full">
        <div class="boxcenter_add">
            <div class="content_form_edit">
                <div class="left_content_edit">
                    <form class="formedit" action="index.php?ctrl=tour&act=addnoidungtour" method='post' enctype="multipart/form-data">


                            <h1> thêm nội dung tour</h1>
                        <div class="form_group">

                            

                            <div class="form_content">
                                <label for="">Ma noi dung tour</label>
                                <input type="text" name='id' value=<?php echo $id?> >
                            </div>


                            <label for="">Nội dung 1</label>
                            <div class="form_content">
                                <textarea name="name1" id="" cols="120" rows="10" ></textarea>
                            </div>

                            <label for="">them hinh 1</label>
                            <div class="file_edittip">
                                <label for="file">Chosse File</label>
                                <input type="file" name='file_name' id='file'>
                            </div>

                            

                            <label for="">Nội dung 2</label>
                            <div class="form_content">
                                <textarea name="name2" id="" cols="120" rows="10" value=""></textarea>
                            </div>

                            <label for="">them hinh 2</label>
                            <div class="file_edittip">
                                <label for="file2">Chosse File</label>
                                <input type="file" name='file_name' id='file2'>
                            </div>

                            <label for="">Nội dung 3</label>
                            <div class="form_content">
                                <textarea name="name3" id="" cols="120" rows="10" value=""></textarea>
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