<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php

$kode		= isset($_GET['id']) ? $_GET['id'] : "";


if ($kode=="") {
	echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
} else {
	$query = mysql_query("DELETE FROM sampah WHERE kode='$kode'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
	}
}
?>
