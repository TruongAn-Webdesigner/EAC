<?php
            include_once('database.php');

            function getad($mail){
                $sql="SELECT * FROM admin WHERE email = '$mail'";
                return query($sql);
            }
    
?>