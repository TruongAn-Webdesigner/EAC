
<?php $name_dd=$_GET['name_dd'];?>
    <div class="roww">
    <div class="titleLT">
            Danh Sách các khách hàng đi  <span><?php echo''.$name_dd.''?></span>
    </div>

</div>

    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <td>Mã tour</td>
                                        <td>Tên khách hàng</td>
                                        <td>Địa điểm</td>
                                        <td>Ngày đi</td>
                                    </tr>
                            
                                 <?php

                                    foreach($gt as $gt){
                                        echo'
                                            <tr>
                                                <td>'.$gt['id_dd'].'</td>
                                                <td>'.$gt['hoten'].'</td>
                                                <td>'.$gt['name_dd'].'</td>
                                                <td>'.$gt['ngaydat'].'</td>
                                            </tr>
                                        ';
                                    }

                                 ?>

                                </table>
                            </div>

                </div>
            </div>
        </div>
    </article>
