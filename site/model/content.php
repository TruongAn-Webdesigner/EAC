<?php
    include_once('database.php');

    function getAllTopFeautureById($id){
        $sql="SELECT * FROM noidungbocuc INNER JOIN diadiem on diadiem.id_dd=noidungbocuc.id_dd WHERE diadiem.id_dd='$id'";
        return query($sql);
    }
?>