<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php

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

if ($norek==""||$nama==""||$alamat==""||$tgl==""||$tl==""||$noktp==""||$saldo==""||$peringkat==""||$uname==""||$pswd=="") {
	echo "<script>alert('Pengisian form harus lengkap. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_nasabah'>";
} else {
	$cek=mysql_query("SELECT * FROM nasabah WHERE no_rekening='$norek'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Data nasabah dengan nomor rekening $norek pernah direkam !')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=detil_nasabah&id=$norek'>";
	} else {
		$query = mysql_query("INSERT INTO nasabah VALUES (NULL, '$norek', '$nama', '$alamat', '$tgl', '$tl', '$noktp', '$saldo', '$peringkat', '$uname', '$pswd')");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=nasabah'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Silahkan ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}
}
?>
