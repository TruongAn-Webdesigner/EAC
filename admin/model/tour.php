<?php

        include_once('database.php');

        function getAlldd(){
            $sql="SELECT * FROM diadiem JOIN khuvuc on diadiem.id_kv = khuvuc.id_kv";
            return query($sql);
        }


   /*      function addKV($name_kv,$img){
          $sql="INSERT INTO khuvuc( name_kv, img_kv) VALUES ('$name_kv','$img')";
          return execute($sql);
        } */
?>
