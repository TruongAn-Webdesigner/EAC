<div class="roww">
    <div class="titleLT">
            <span> Danh Sách khách hàng login</span>
    </div>

</div>

    <article>
        <div class="roww">
            <div class="full_bg">
                <div class="boxcenter_content_tip">
                            <div class="card-body">
                                <table class="table table-striped table">
                                
                                    <tr>
                                        <th>Mã KH</th>
                                        <th>Tên KH</th>
                                        <th>Email KH</th>
                                        <th>SĐT</th>
                                    </tr>
                            
                                 <?php

                                    foreach($kh as $gt){
                                        echo'
                                            <tr>
                                                <td>'.$gt['id_kh'].'</td>
                                                <td>'.$gt['name_kh'].'</td>
                                                <td>'.$gt['email_kh'].'</td>
                                                <td>'.$gt['sdt_kh'].'</td>
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
