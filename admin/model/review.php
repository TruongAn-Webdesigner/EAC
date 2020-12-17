<?php

include_once('database.php');

function getCTTourById_DD(){
    $sql="SELECT * FROM diadiem INNER JOIN booktour ON diadiem.id_dd = booktour.id_dd ";
    return query($sql);
}

function getAlldd(){
    $sql="SELECT *,COUNT(*) as tongkh FROM `booktour` JOIN diadiem ON booktour.id_dd=diadiem.id_dd GROUP BY diadiem.id_dd ";
    return query($sql);
}

function getCTTourById($id_dd){
    $sql="SELECT * FROM diadiem INNER JOIN booktour ON diadiem.id_dd = booktour.id_dd WHERE diadiem.id_dd='$id_dd'";
    return query($sql);
}

function getallKH(){
    $sql="SELECT * FROM khachhang";
    return query($sql);
}



?>
