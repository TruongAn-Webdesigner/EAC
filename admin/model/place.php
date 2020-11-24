<?php

        include_once('database.php');

        function getAllKV(){
            $sql="SELECT * from khuvuc ";
            return query($sql);
        }


        function addKV($name_kv,$img){
          $sql="INSERT INTO khuvuc( name_kv, img_kv) VALUES ('$name_kv','$img')";
          return execute($sql);
        }
?>
