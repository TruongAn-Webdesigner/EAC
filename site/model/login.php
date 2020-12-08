<?php
            include_once('database.php');

            function getkh($kh_login){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$kh_login'";
                return query($sql);
            }
