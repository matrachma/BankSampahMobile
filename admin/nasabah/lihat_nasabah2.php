<?php

include "../nasabah/link.php";
include "../include/koneksi_db.php";

$cari	= isset($_POST['cari']) ? $_POST['cari'] : "";
$go		= isset($_POST['go']) ? $_POST['go'] : "";
$per_halaman	= 10;

if ($go == "go" && $cari != "Pencarian...") {
	$query		= mysql_query("SELECT * FROM nasabah WHERE no_rekening LIKE '%$cari%' OR nama LIKE '%$cari%'", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
} else if ($go == "" || $cari == "Pencarian...") {
	$query		=mysql_query("SELECT * FROM nasabah ORDER BY nama LIMIT $awal,$batas", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
}
?>
<table class="table-data" border=1 width=100% border=0 >
    <tr>
        <td class="td-data" colspan="7"><b>Jumlah Nasabah : <?php echo $j_cari; ?> </b></td>
    </tr>
        <tr>
        <td class="head-data">No. Rekining</td>
        <td class="head-data">Nama</td>
        <td class="head-data">Alamat</td>
        <td class="head-data">Tanggal Lahir</td>
        <td class="head-data">Saldo</td>
        <td class="head-data">Peringkat</td>
        <td class="head-data">Edit</td>
        <td class="head-data">Hapus</td>
    </tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "
            <tr>
                <td class='pinggir-data'><a href='?page=detil_nasabah&noRek=$hasil[no_rekening]'>$hasil[no_rekening]</a></td>
                <td class='td-data'>$hasil[nama]</td>
                <td class='td-data'>$hasil[alamat]</td>
                <td class='td-data'>$hasil[tanggal_lahir]</td>
                <td class='td-data'>$hasil[saldo]</td>
                <td class='td-data'>$hasil[peringkat]</td>
                <td class='td-data'><a href='?page=edit_nasabah&id=$hasil[id_N]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
                <td class='td-data'><a href='?page=act_hapus_nasabah&id=$hasil[id_N]' onclick='return confirm(\"Anda yakin ingin menghapus data nasabah $hasil[no_rekening] ?\")'><img class='img_link' src='../image/Delete-icon.png' width='15px' height='15px'></a></td>
            </tr>";
}
?>
</table>