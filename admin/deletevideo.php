<?php
include "connection.php";
$id = $_GET['id'];
if(hapusVideo($id)>0){
    header("location:kelolavideo.php");
}
?>