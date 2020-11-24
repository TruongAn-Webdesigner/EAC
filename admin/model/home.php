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

        function getRankTour(){
          $sql="SELECT * ,COUNT(*) AS 'tongKH' FROM (( tour JOIN chitiettour ON tour.id_tour =chitiettour.id_tour ) JOIN danhsachkh ON chitiettour.id_chitiet = danhsachkh.id_ct) GROUP BY id_ct ORDER BY tongKH DESC";
          return query($sql);
        }

        function getRankKH(){
          $sql="SELECT *,COUNT(*) AS tongCD FROM ((khachhang JOIN danhsachkh ON khachhang.id_kh = danhsachkh.id_kh )INNER JOIN chitiettour ON danhsachkh.id_ct = chitiettour.id_chitiet) GROUP BY danhsachkh.id_kh ORDER BY tongCD DESC";
          return query($sql);
        }





?>
