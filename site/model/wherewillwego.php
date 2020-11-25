<?php
    include_once('database.php');

    function getAllTopFeauture(){
        $sql="select * from diadiem order by id_dd limit 5";
        return query($sql);
    }

    function getAllPlace(){
        $sql="SELECT name_dd,rating_dd,diadiem.id_kv,diadiem.id_dd,name_kv,ngaydang,img_dd,rating from ((diadiem INNER JOIN khuvuc ON diadiem.id_kv=khuvuc.id_kv) INNER JOIN noidungbocuc on diadiem.id_dd=noidungbocuc.id_dd)";
        return query($sql);
    }

    function getAllTip(){
        $sql="select * from tip_note limit 8";
        return query($sql);
    }

    
?>