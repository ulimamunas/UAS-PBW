<?php
include "connection.php";
$id = $_GET['id'];
if(hapusFoto($id)>0){
    header("location:kelolafoto.php");
}
?>