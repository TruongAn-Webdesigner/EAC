<?php

        include_once('database.php');

        function getAllTip(){
            $sql="SELECT * from tip_note ";
            return query($sql);
        }


        function addTip($name_kv,$img){
          $sql="INSERT INTO khuvuc( name_kv, img_kv) VALUES ('$name_kv','$img')";
          return execute($sql);
        }
?>
