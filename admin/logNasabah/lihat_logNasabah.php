<?php

include "../logNasabah/link.php";
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

$query=mysql_query("SELECT * FROM lognasabah ORDER BY id_log", $konek);
$query2=mysql_query("SELECT * FROM lognasabah");
$jumlah_log=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_log/$per_halaman);
//echo $jum_halaman;
/*echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=logNasabah&hal=$i'><b>$i</b></a>]  </font>";
	} else {
	echo "<font size='2px' color='red'><a href='?page=logNasabah&hal=$i'><b>$i</b></a> </font>";
	}
}
echo "</center>";*/
?>
<hr>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Keseluruhan Log Nasabah : <?php echo $jumlah_log; ?> record</b></td></tr>
<tr><td class="head-data">Id</td><td class="head-data">Tanggal</td><td class="head-data">Aktivitas</td><td class="head-data">Id Nasabah</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'>$hasil[id_log]</td>
      <td class='td-data'>$hasil[tanggal]</td>
	  <td class='td-data'>$hasil[aktivitas]</td>
	  <td class='td-data'><a href='?page=detil_logNasabah&id=$hasil[id_N]'>$hasil[id_N]</td>
	  <td class='td-data'><a href='?page=edit_logNasabah&id=$hasil[id_log]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='' onclick='return confirm(\"Data Log Nasabah Tidak Bisa Dihapus\")'><img class='img_link' src='../image/Delete-icon.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>