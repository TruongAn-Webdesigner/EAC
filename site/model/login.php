<?php
            include_once('database.php');

            function getKH($mail){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$mail'";
                return query($sql);
            }
    
?>
