<?php
    include_once('database.php');

    function addRT($id_dd,$id_kh,$rtm){
        $sql="INSERT INTO  rating ( id_dd,id_kh_dg,rate) VALUES ('$id_dd','$id_kh','$rtm')";
        return execute($sql);
      }

      function getKH_DG($id_kh,$id){
        $sql="SELECT count(*) as 'tong' FROM `rating` WHERE id_kh_dg = $id_kh and id_dd = $id";
        return query($sql);
    }
?>