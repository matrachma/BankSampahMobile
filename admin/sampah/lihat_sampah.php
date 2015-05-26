<?php

include "../sampah/link.php";
include "../include/koneksi_db.php";


//variabel _GET /
$hal	= isset($_GET['hal']) ? $_GET['hal'] : "";


$per_halaman	= 10;   // jumlah record data per halaman

if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas=($hal*2)+$per_halaman;

$query2=mysql_query("SELECT * FROM sampah");
$jumlah_sampah=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_sampah/$per_halaman);
//echo $jum_halaman;

/*
if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=sampah&hal=$i'><b>$i</b></a>]</font>";
	} else {
	echo "<font size='2px' color='red'>[<a href='?page=sampah&hal=$i'><b>$i</b></a>]</font>";
	}
}
echo "</center><hr>";
}*/
?>
<table class="table-data" border=1 width=100% border=0 >
    <tr>
        <td class="td-data" colspan="7"><b>Jumlah Keseluruhan Jenis Sampah : <?php echo $jumlah_sampah; ?> unit</b></td>
    </tr>
    <tr>
        <td class="head-data">Kode</td>
        <td class="head-data">Kategori</td>
        <td class="head-data">Jenis</td>
        <td class="head-data">Harga</td>
        <td class="head-data">Edit</td>
        <td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query2)) {
echo "<tr><td class='pinggir-data'>$hasil[kode]</td>
      <td class='td-data'>$hasil[kategori]</td>
	  <td class='td-data'>$hasil[jenis]</td>
	  <td class='td-data'>$hasil[harga]</td>
	  <td class='td-data'><a href='?page=edit_sampah&id=$hasil[kode]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_sampah&id=$hasil[kode]' onclick='return confirm(\"Anda yakin ingin menghapus data sampah $hasil[kode] ?\")'><img class='img_link' src='../image/Delete-icon.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>