<?php
include "connection.php";
$id = $_GET['id'];
if(hapusKomen($id)>0){
    header("location:kelolakomentar.php");
}
?>