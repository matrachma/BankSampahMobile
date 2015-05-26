<?php
include "../include/koneksi_db.php";
include "../sampah/link.php";

$kode	= isset($_GET['id']) ? $_GET['id'] : "";

$query=mysql_query("SELECT * FROM sampah WHERE kode='$kode'", $konek);
$hasil=mysql_fetch_array($query);
?>
<table class="table-data" width=100% border=1>
	<tr><td colspan="2" class="head-data">Data Detail Kendaraan : "<?php echo $id; ?>"</td></tr>
	<tr><td class="pinggir-data">Plate Nomor</td><td class="pinggir-data"><?php echo $hasil[0]; ?></td></tr>
	<tr><td class="pinggir-data">Merek</td><td class="pinggir-data"><?php echo $hasil[1]; ?></td></tr>
	<tr><td class="pinggir-data">Tipe</td><td class="pinggir-data"><?php echo $hasil[2]; ?></td></tr>
	<tr><td class="pinggir-data">Kapasitas</td><td class="pinggir-data"><?php echo $hasil[3]; ?> <b>kursi</b></td></tr>
	<tr><td class="pinggir-data">Harga Sewa</td><td class="pinggir-data"><?php echo $hasil[4]; ?></td></tr>
<tr><td class="pinggir-data">Status</td><td class="pinggir-data"><?php echo $hasil[5]; ?></td></tr>
</table>