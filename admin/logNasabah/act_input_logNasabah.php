<?php
include "../include/koneksi_db.php";


$tgl		= isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";
$aktivitas   = isset($_POST['aktivitas']) ? addslashes($_POST['aktivitas']) : "";
$idN  = isset($_POST['idN']) ? addslashes($_POST['idN']) : "";

if ($tgl==""||$aktivitas==""||$idN=="") {
	echo "<script>alert('Pengisian form harus lengkap. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_logNasabah'>";
} else {
		$query = mysql_query("INSERT INTO lognasabah VALUES (NULL, '$tgl', '$aktivitas', '$idN')");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=logNasabah'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Silahkan ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}

?>
