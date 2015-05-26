<?php

include "../info/link.php";
include "../include/koneksi_db.php";

$per_halaman	=10;
$hal			= isset($_GET['hal']) ? $_GET['hal'] : "";


if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas=($hal*2)+$per_halaman;

$query=mysql_query("SELECT * FROM infobsm ORDER BY id_info", $konek);
$query2=mysql_query("SELECT * FROM infobsm");
$jumlah_info=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_info/$per_halaman);
//echo $jum_halaman;

?>
<hr>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Keseluruhan Info : <?php echo $jumlah_info; ?> record</b></td></tr>
<tr><td class="head-data">Judul Info</td><td class="head-data">Isi</td><td class="head-data">Tanggal</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='td-data'>$hasil[judul_info]</td>
	  <td class='td-data'>$hasil[isi]</td>
	  <td class='td-data'>$hasil[tanggalinfo]</td>
	  <td class='td-data'><a href='?page=edit_info&id=$hasil[id_info]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_info&id=$hasil[id_info]' onclick='return confirm(\"Anda yakin ingin menghapus data info $hasil[judul_info] ?\")'><img class='img_link' src='../image/Delete-icon.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>