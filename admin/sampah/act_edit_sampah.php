<?php
include "../include/koneksi_db.php";

//variabel _POST
$kode		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$kat     = isset($_POST['kategori']) ? addslashes($_POST['kategori']) : "";
$jen	 = isset($_POST['jenis']) ? addslashes($_POST['jenis']) : "";
$harga  = isset($_POST['harga']) ? addslashes($_POST['harga']) : "";


if ($kode == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
} else {
	$query = mysql_query("UPDATE sampah SET kode='$kode', kategori='$kat', jenis='$jen', harga='$harga' WHERE kode='$kode'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil diupdate.Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_sampah&id=$kode'>";
	}
}
?>
