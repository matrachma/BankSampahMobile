<?php
include "../include/koneksi_db.php";

//variabel _POST
$kode		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$judul     = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";
$isi	 = isset($_POST['isi']) ? addslashes($_POST['isi']) : "";
$tgl  = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";


if ($kode == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=info'>";
} else {
	$query = mysql_query("UPDATE infobsm SET id_info='$kode', judul_info='$judul', isi='$isi', tanggalinfo='$tgl' WHERE id_info='$kode'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil diupdate.Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=info'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_info&id=$kode'>";
	}
}
?>
