<?php

include "../nasabah/link.php";
include "../include/koneksi_db.php";

//tampilkan form pencarian
echo "
<center>
    <form action='?page=lihat_nasabah2' method='post'>
        <input type='text' name='cari' value='Pencarian...' onfocus=\"this.value='';\" onblur=\"if(this.value=='') this.value='Pencarian...';\">&nbsp;&nbsp;<input type='submit' value='go' name='go'>&nbsp;&nbsp;&nbsp;*) masukkan nomor rekening ATAU nama nasabah
    </form>
</scenter>";

//variabel _GET /
$hal	= isset($_GET['hal']) ? $_GET['hal'] : "";


//variabel _POST 
$cari	= isset($_POST['cari']) ? $_POST['cari'] : "";
$go		= isset($_POST['go']) ? $_POST['go'] : "";


$per_halaman	= 10;   // jumlah record data per halaman

if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas=($hal*2)+$per_halaman;



if ($go == "go" && $cari != "Pencarian...") {
	$query		= mysql_query("SELECT * FROM nasabah WHERE no_rekening LIKE '%$cari%' OR nama LIKE '%$cari%'", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
} else if ($go == "" || $cari == "Pencarian...") {
	$query		=mysql_query("SELECT * FROM nasabah ORDER BY nama LIMIT $awal,$batas", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
}


$query2=mysql_query("SELECT * FROM nasabah ORDER by peringkat ASC");
$jumlah_nasabah=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_nasabah/$per_halaman);
//echo $jum_halaman;


/*if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=nasabah&hal=$i'><b>$i</b></a>]</font>";
	} else {
	echo "<font size='2px' color='red'>[<a href='?page=nasabah&hal=$i'><b>$i</b></a>]</font>";
	}
}
echo "</center><hr>";
}*/
?>
<table class="table-data" border=1 width=100% border=0 >
    <tr>
        <td class="td-data" colspan="7"><b>Jumlah Keseluruhan Nasabah : <?php echo $jumlah_nasabah; ?> orang</b></td>
    </tr>
    <tr>
        <td class="head-data">No. Rekening</td>
        <td class="head-data"><a href='?page=lihat_nasabahNA'>Nama</a></td>
        <td class="head-data">Alamat</td>
        <td class="head-data">Tanggal Lahir</td>
        <td class="head-data"><a href='?page=lihat_nasabahSA'>Saldo</a></td>
        <td class="head-data"><a href='?page=lihat_nasabahPD'>Peringkat</a></td>
        <td class="head-data">Edit</td>
        <td class="head-data">Hapus</td>
    </tr>
<?php
    while ($hasil=mysql_fetch_array($query2)) {
        echo "
            <tr>
                <td class='pinggir-data'><a href='?page=detil_nasabah&noRek=$hasil[no_rekening]'>$hasil[no_rekening]</a></td>
                <td class='td-data'>$hasil[nama]</td>
                <td class='td-data'>$hasil[alamat]</td>
                <td class='td-data'>$hasil[tanggal_lahir]</td>
                <td class='td-data'>$hasil[saldo]</td>
                <td class='td-data'>$hasil[peringkat]</td>
                <td class='td-data'><a href='?page=edit_nasabah&id=$hasil[id_N]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
                <td class='td-data'><a href='?page=act_hapus_nasabah&id=$hasil[id_N]' onclick='return confirm(\"Anda yakin ingin menghapus data nasabah $hasil[id_N] ?\")'><img class='img_link' src='../image/Delete-icon.png' width='15px' height='15px'></a></td>
            </tr>";
}
?>
</table>