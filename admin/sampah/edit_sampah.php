<?php
include "../include/koneksi_db.php";
include "../sampah/link.php";

$kode	= isset($_GET['id']) ? $_GET['id'] : "";

if ($kode == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_sampah.php'>";
} else {
	$query		= mysql_query("SELECT * FROM sampah WHERE kode='$kode'", $konek);
	$hasil		= mysql_fetch_array($query);
	$Kode  		= $hasil['kode'];
	$kat 		= $hasil['kategori'];
	$jen	      = $hasil['jenis'];
	$harga	    = $hasil['harga'];
	}
?>

<form method="post" action="?page=act_edit_sampah">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $Kode; ?>">
<tr><td class="head-data" colspan="2">Edit Data Sampah : <?php echo $Kode; ?></td></tr>
<tr><td class="pinggir-data">Kode Sampah</td>
<td class="pinggir-data"><input type="text" name="id" value="<?php echo $Kode; ?>" size="10"></td></tr>
<tr><td class="pinggir-data">Kategori</td>
<td class="pinggir-data"><input type="text" name="kategori" value="<?php echo $kat; ?>" size="20"></td></tr>
<tr><td class="pinggir-data">Jenis</td>
<td class="pinggir-data"><input type="text" name="jenis" value="<?php echo $jen; ?>" size="20"></td></tr>
<tr><td class="pinggir-data">Harga</td>
<td class="pinggir-data"><input type="text" name="harga" value="<?php echo $harga; ?>" size="20"></td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
