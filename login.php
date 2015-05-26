<?php
session_start();
$_SESSION['sesi']	= NULL;

include "konek.php";

$user	= isset($_POST['user']) ? $_POST['user'] : "";
$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";


$qry	= mysql_query("SELECT * FROM nasabah WHERE usernameN = '$user' AND passwordN = '$pass'");
$sesi	= mysql_num_rows($qry);

if ($sesi == 1) {
	$data_nasabah	= mysql_fetch_array($qry);
	
	$_SESSION['sesi'] = $data_nasabah['id_N'];
	$namalog	=	$data_nasabah['nama'];
	echo "<script>alert('Anda berhasil Log In. Nasabah : $namalog');</script>";
	echo "<meta http-equiv='refresh' content='0; url=nasabah.php?user=$sesi'>";

} else {
	echo "<meta http-equiv='refresh' content='0; url=login.html'>";
	echo "<script>alert('Anda Gagal Log In. Periksa kembali username dan password anda. Atau hubungi kantor pusat kami.');</script>";
}

?>