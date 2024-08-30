<?php
include "connection.php";
$id = $_GET['id'];
if(hapusAduan($id)>0){
    header("location:kelolapengaduan.php");
}
?>