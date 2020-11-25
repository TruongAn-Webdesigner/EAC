<?php

        include_once('database.php');

        function getAllTip(){
            $sql="SELECT * from tip_note ";
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

        function updateTiphinh($id,$name,$img){
            $sql = "update tip_note set name_tip='$name', img_tip='$img' where id_tip='$id'";
              execute($sql);
          }
    
            function updateTip($id,$name){
              $sql = "update tip_note set name_tip='$name' where id_tip='$id'";
              execute($sql);
          }
    
          function deleteTip($id){
             $sql="delete from tip_note where id_tip='$id'";
           return execute($sql);
        }
?>
