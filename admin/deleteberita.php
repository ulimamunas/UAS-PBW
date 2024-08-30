<?php
include "connection.php";
$id = $_GET['id'];
if(hapusBerita($id)>0){
    header("location:kelolaberita.php");
}
?>