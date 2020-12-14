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

            function getkh_dangky($name,$email,$sdt,$pass){
                $sql="INSERT INTO `khachhang` (`name_kh`, `email_kh`, `sdt_kh`, `pass`) VALUES ('$name', '$email', '$sdt', '$pass')";
                return execute($sql);
            }
?>
