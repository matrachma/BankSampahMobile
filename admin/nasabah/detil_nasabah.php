<?php
include "../include/koneksi_db.php";
include "../nasabah/link.php";

$id	= isset($_GET['noRek']) ? $_GET['noRek'] : "";

$query=mysql_query("SELECT * FROM nasabah WHERE no_rekening='$id'", $konek);
$hasil=mysql_fetch_array($query);
?>
<table class="table-data" width=100% border=1>
	<tr><td colspan="2" class="head-data">Data Detail Nasabah : "<?php echo $id; ?>"</td></tr>
	<tr><td class="pinggir-data">No. Rekening</td><td class="pinggir-data"><?php echo $hasil[1]; ?></td></tr>
	<tr><td class="pinggir-data">Nama</td><td class="pinggir-data"><?php echo $hasil[2]; ?></td></tr>
	<tr><td class="pinggir-data">Alamat</td><td class="pinggir-data"><?php echo $hasil[3]; ?></td></tr>
	<tr><td class="pinggir-data">No. KTP</td><td class="pinggir-data"><?php echo $hasil[6]; ?></td></tr>
	<tr><td class="pinggir-data">Saldo</td><td class="pinggir-data"><?php echo $hasil[7]; ?></td></tr>
	<tr><td class="pinggir-data">Peringkat</td><td class="pinggir-data"><?php echo $hasil[8]; ?></td></tr>
	<tr><td class="pinggir-data">username</td><td class="pinggir-data"><?php echo $hasil[9]; ?></td></tr>
	<tr><td class="pinggir-data">password</td><td class="pinggir-data"><?php echo $hasil[10]; ?></td></tr>
</table>