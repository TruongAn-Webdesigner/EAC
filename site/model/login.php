<?php
            include_once('database.php');

            function getkh($kh_login){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$kh_login'";
                return query($sql);
            }

            function getkh_id($kh_login){
                $sql="SELECT * FROM khachhang WHERE email_kh = '$kh_login'";
                return queryOne($sql);
            }
