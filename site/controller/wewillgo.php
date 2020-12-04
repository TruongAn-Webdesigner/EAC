<?php
include_once 'model/database.php';
include_once 'model/wherewillwego.php';
include_once 'model/content.php';
$action = 'index';
if(isset($_GET['act'])){
    $action=$_GET['act'];
}

switch($action){
    case 'index':
    $topFeauture=getAllTopFeauture();
    $allPlace=getAllPlace();
    include_once 'view/wherewillwego/index.php';
    break;

    case 'content':
    $id=$_GET['idcontent'];
    $topFeautureById=getAllTopFeautureById($id);
    include 'view/content/content.php';
    break;

    case 'contentbestplace':
    include_once 'view/content/content.php';
    break;
}

?>