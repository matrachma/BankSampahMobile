<?php
include "../include/koneksi_db.php";

//variabel _POST
$idL		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$tgl     = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";
$akt	 = isset($_POST['akt']) ? addslashes($_POST['akt']) : "";
$idN  = isset($_POST['idN']) ? addslashes($_POST['idN']) : "";


if ($idL == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
} else {
	$query = mysql_query("UPDATE lognasabah SET id_log='$idL', tanggal='$tgl', aktivitas='$akt', id_N='$idN' WHERE id_log='$idL'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil diupdate.Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=logNasabah'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_logNasabah&id=$idL'>";
	}
}
?>
