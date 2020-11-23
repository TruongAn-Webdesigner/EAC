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

        function getTongTien(){
          $sql="SELECT id_tour, chitiettour.price_ct*COUNT(*) AS tong FROM `danhsachkh` INNER JOIN chitiettour ON danhsachkh.id_ct = chitiettour.id_chitiet GROUP BY id_ct ";
          return query($sql);
        }

?>
