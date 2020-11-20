<?php

        include_once('database.php');

        function getCountTour(){
            $sql="SELECT count(*) from tour ";
            return query($sql);
        }

        function getCountKH(){
            $sql="SELECT count(*) as tongKH from khachhang ";
            return query($sql);
        }

?>