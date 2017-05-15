<?php
	include "koneksi.php";
	
	$nomor = $_POST["nomor"];
	
	if($_POST["subvot"]){
            if($_POST["pilih"] != null){
                $hvot=mysql_query("select * from polling where nomor = $nomor");
                $dbhvot=mysql_fetch_assoc($hvot);
                if($_POST["pilih"] == "sb"){
                    $j=$dbhvot["sangat_baik"]+1;
                    mysql_query("update polling set sangat_baik='".$j."'where nomor = $nomor");
                    }
                if($_POST["pilih"] == "b"){
                    $j=$dbhvot["baik"]+1;
                    mysql_query("update polling set baik='".$j."'where nomor = $nomor");
                    }
                if($_POST["pilih"] == "s"){
                    $j=$dbhvot["sedang"]+1;
                    mysql_query("update polling set sedang='".$j."'where nomor = $nomor");
                    }
                if($_POST["pilih"] == "br"){
                    $j=$dbhvot["buruk"]+1;
                    mysql_query("update polling set buruk='".$j."'where nomor = $nomor");
                    }
				}	
			}
	header('Location:anggota.php');
?>