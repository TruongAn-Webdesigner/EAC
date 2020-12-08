<?php

        include_once('database.php');

        function getAllTip(){
            $sql="SELECT * from tip_note ";
            return query($sql);
        }

        function getAllTipByIdAdmin($id){
            $sql="select * from noidungtipnote where id_nd=$id";
            return query($sql);
        }


        function addTip($name_tip,$img){
            $sql="INSERT INTO tip_note( name_tip,img_tip) VALUES ('$name_tip','$img')";
            return execute($sql);
        }
        function getTipID($id){
            $sql="SELECT * FROM `tip_note` WHERE id_tip='$id'";
            return queryOne($sql);
        }
/* ,$name_nd2,$name_nd3,$name_nd4,$noidung1,$noidung2,$noidung3,$noidung4,$noidung5,$noidung6,$noidung7,$noidung8 */

        /* phan update noi dung tip */
        function updateNoiDungTip($id,$name_nd1){
          $sql = "update noidungtipnote set name_nd1='$name_nd1' where id_nd='$id'";
          execute($sql);
      }


        function updateTiphinh($id,$name,$img){
            $sql = "update tip_note set name_tip='$name', img_tip='$img' where id_tip='$id'";
              execute($sql);
          }


    
            function updateTip($id,$name){
              $sql = "update tip_note set name_tip='$name' where id_tip='$id'";
              execute($sql);
          }

          function getTipContentById($id){
            $sql="SELECT * FROM `noidungtipnote` WHERE id_nd='$id'";
            return queryOne($sql);
          }
    
          function deleteTip($id){
             $sql="delete from tip_note where id_tip='$id'";
           return execute($sql);
        }
?>
