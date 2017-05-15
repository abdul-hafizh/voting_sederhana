<?php
	include "koneksi.php";
    if($_POST["sub"]){
        mysql_query("insert into polling values('','".$_POST["isi"]."','','','','','".$_POST["status"]."')");
        }
		header('Location:anggota.php');
?>