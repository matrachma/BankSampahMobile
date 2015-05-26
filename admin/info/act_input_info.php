<?php
include "../include/koneksi_db.php";

$jdl		= isset($_POST['jdl']) ? addslashes($_POST['jdl']) : "";
$isi   = isset($_POST['isi']) ? addslashes($_POST['isi']) : "";
$tgl  = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";

if ($jdl==""||$isi==""||$tgl=="") {
	echo "<script>alert('Pengisian form harus lengkap. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_logNasabah'>";
} else {
	$cek=mysql_query("SELECT * FROM infobsm WHERE judul_info='$jdl'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Info dengan Judul $jdl pernah direkam !')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=info'>";
	} else {
		$query = mysql_query("INSERT INTO infobsm VALUES (NULL, '$jdl', '$isi', '$tgl')");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=info'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Silahkan ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}
}
?>
