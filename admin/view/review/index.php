<div class="roww">
    <div class="titleLT">
            <span> Danh Sách các Địa Điểm Khách Đặt</span>
    </div>

</div>

    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <th>Mã tour</th>
                                        <th>Địa điểm</th>
                                        <th>Rating_dd</th>
                                        <th>View</th>
                                        <th>Số người đặt</th>
                                    </tr>
                            
                                 <?php

                                    foreach($dd as $gt){
                                        echo'
                                            <tr>
                                                <td>'.$gt['id_dd'].'</td>
                                                <td><a href="index.php?ctrl=review&act=chitiettour&id_dd='.$gt['id_dd'].'&name_dd='.$gt['name_dd'].'">'.$gt['name_dd'].'</a></td>
                                                <td>'.$gt['rating_dd'].'</td>
                                                <td>'.$gt['view'].'</td>
                                                <td>'.$gt['tongkh'].'</td>
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
</body>
