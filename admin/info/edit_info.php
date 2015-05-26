<?php
include "../include/koneksi_db.php";
include "../info/link.php";

$kode	= isset($_GET['id']) ? $_GET['id'] : "";

if ($kode == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_info.php'>";
} else {
	$query		= mysql_query("SELECT * FROM infobsm WHERE id_info='$kode'", $konek);
	$hasil		= mysql_fetch_array($query);
    $id         = $hasil['id_info'];
	$judul 		= $hasil['judul_info'];
	$isi	      = $hasil['isi'];
	$tgl	    = $hasil['tanggalinfo'];
	}
?>

<form method="post" action="?page=act_edit_info">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $Kode; ?>">
<tr><td class="head-data" colspan="2">Edit Data Info : <?php echo $judul; ?></td></tr>
<tr><td class="pinggir-data">Id</td>
<td class="pinggir-data"><input type="text" readonly="readonly" name="id" value="<?php echo $id; ?>" size="20"></td></tr>
<tr><td class="pinggir-data">Judul</td>
<td class="pinggir-data"><input type="text" name="judul" value="<?php echo $judul; ?>" size="20"></td></tr>
<tr><td class="pinggir-data">Isi</td>
<td class="pinggir-data"><input type="text" name="isi" value="<?php echo $isi; ?>" size="200"></td></tr>
<tr><td class="pinggir-data">Tanggal</td>
<td class="pinggir-data"><input type="date" name="tgl" value="<?php echo $tgl; ?>"></td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
