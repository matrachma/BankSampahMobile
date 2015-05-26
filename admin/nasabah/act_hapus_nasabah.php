<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

$idN		= isset($_GET['id']) ? $_GET['id'] : "";


if ($idN=="") {
	echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
} else {
	$query = mysql_query("DELETE FROM nasabah WHERE id_N='$idN'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
	}
}
?>
