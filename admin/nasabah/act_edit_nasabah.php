<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php

//variabel _POST
$idN		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$norek		   = isset($_POST['noRek']) ? addslashes($_POST['noRek']) : "";
$nama     = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$alamat	 = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
$tgl    = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";
$tl    = isset($_POST['tl']) ? addslashes($_POST['tl']) : "";
$noktp  = isset($_POST['noKTP']) ? addslashes($_POST['noKTP']) : "";
$saldo	   = isset($_POST['saldo']) ? addslashes($_POST['saldo']) : "";
$peringkat	   = isset($_POST['peringkat']) ? addslashes($_POST['peringkat']) : "";
$uname	   = isset($_POST['usrname']) ? addslashes($_POST['usrname']) : "";
$pswd	   = isset($_POST['pass']) ? addslashes($_POST['pass']) : "";

if ($idN == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
} else {
	$query = mysql_query("UPDATE nasabah SET id_N='$idN', no_rekening='$norek', nama='$nama', alamat='$alamat', tanggal_lahir='$tgl', tempat_lahir='$tl', no_KTP='$noktp', saldo='$saldo', peringkat='$peringkat', usernameN='$uname', passwordN='$pswd' WHERE id_N='$idN'", $konek);

	if ($query) {
		echo "<script>alert('Data berhasil diupdate. Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_nasabah=$norek'>";
	}
}
?>
