<?php
include "../include/koneksi_db.php";

$kode     = isset($_POST['kode']) ? addslashes($_POST['kode']) : "";
$kat		= isset($_POST['kategori']) ? addslashes($_POST['kategori']) : "";
$jen    = isset($_POST['jenis']) ? addslashes($_POST['jenis']) : "";
$harga  = isset($_POST['harga']) ? addslashes($_POST['harga']) : "";


if ($kode==""||$kat==""||$jen==""||$harga=="") {
	echo "<script>alert('Pengisian form harus lengkap. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_sampah'>";
} else {
	$cek=mysql_query("SELECT * FROM sampah WHERE kode='$kode'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Data sampah dengan kode $kode pernah direkam !')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=detil_sampah&id=$kode'>";
	} else {
		$query = mysql_query("INSERT INTO sampah VALUES ('$kode', '$kat', '$jen', '$harga')");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=sampah'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Silahkan ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}
}
?>
