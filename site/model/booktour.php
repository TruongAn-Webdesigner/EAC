<?php
    function addToOrder($fname,$address,$email,$phone,$diadiem,$ngaydat)
    {
    $query="insert into booktour(hoten,email,sdt,diachi,id_dd,ngaydat)
    values('$fname','$email','$phone','$address','$diadiem','$ngaydat')";
    $lastId = executeReturnID($query);
    return $lastId;//tra ve ma don hang moi vua them
    }


    function postInforKhById($id){
        $sql="select * khachhang where id_kh =$id";
        return query($sql);
    }

    
?>

