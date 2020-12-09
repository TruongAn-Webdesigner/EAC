<?php

        include_once('database.php');

        function getAlldd(){
            $sql="SELECT * FROM diadiem JOIN khuvuc on diadiem.id_kv = khuvuc.id_kv";
            return query($sql);
        }


        function addTour($name,$id_kv,$img){
          $sql="INSERT INTO  diadiem ( name_dd,id_kv ,img_dd) VALUES ('$name','$id_kv','$img')";
          return execute($sql);
        }

        function getDDID($id){
          $sql="SELECT * FROM `diadiem` WHERE id_dd='$id'";
          return queryOne($sql);
      }

      function  updateTourhinh($id,$name,$img,$id_kv){
        $sql = "update diadiem set name_dd='$name', img_dd='$img',id_kv='$id_kv' where id_dd='$id'";
          execute($sql);
      }

        function updateTour($id,$name,$id_kv){
          $sql = "update diadiem set name_dd='$name' ,id_kv='$id_kv' where id_dd='$id'";
          execute($sql);
      }

      function deleteTour($id){
         $sql="delete from diadiem where id_dd='$id'";
       return execute($sql);
    }

    function getReviewNoiDungById($id){
      $sql="SELECT * FROM `diadiem` WHERE id_dd='$id'";
    return execute($sql);
 }


      function getReviewContentById($id){
        $sql="SELECT * FROM noidungbocuc WHERE id_dd='$id'";
        return queryOne($sql);
      }

      function updateNoiDungReview($id,$noidung1,$noidung2,$noidung3){
        $sql = "update noidungbocuc set 
        noidung='$noidung1',noidung2='$noidung2',noidung3='$noidung3'
        where id_dd='$id'";
        execute($sql);
    }

?>
