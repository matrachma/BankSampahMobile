<?php
include "../include/koneksi_db.php";
include "../nasabah/link.php";

$idN	= isset($_GET['id']) ? $_GET['id'] : "";

if ($idN == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_nasabah.php'>";
} else {
	$query		= mysql_query("SELECT * FROM nasabah WHERE id_N='$idN'", $konek);
	$hasil		= mysql_fetch_array($query);
	$noRek  	= $hasil['no_rekening'];
	$nama 		= $hasil['nama'];
	$alamat = $hasil['alamat'];
	$tgl	= $hasil['tanggal_lahir'];
    $tl     = $hasil['tempat_lahir'];
	$noKTP	= $hasil['no_KTP'];
	$saldo		= $hasil['saldo'];
	$peringkat	= $hasil['peringkat'];
	$usrnameN	= $hasil['usernameN'];
	$passN		= $hasil['passwordN'];
}
?>

<form method="post" action="?page=act_edit_nasabah">
    <table width=100% border=1 class="table-data">
        <input type="hidden" name="id" value="<?php echo $idN; ?>">
        <tr>
            <td class="head-data" colspan="2">Edit Data Nasabah : <?php echo $noRek; ?></td>
        </tr>
        <tr>
            <td class="pinggir-data">No. Rekening</td>
            <td class="pinggir-data"><input type="text" name="noRek" value="<?php echo $noRek; ?>" size="10"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Nama</td>
            <td class="pinggir-data"><input type="text" name="nama" value="<?php echo $nama; ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Alamat</td>
            <td class="pinggir-data"><input type="text" name="alamat" value="<?php echo $alamat; ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Tanggal Lahir</td>
            <td class="pinggir-data"><input type="date" name="tgl" value="<?php echo $tgl ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Tempat Lahir</td>
            <td class="pinggir-data"><input type="text" name="tl" value="<?php echo $tl ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">No. KTP</td>
            <td class="pinggir-data"><input type="text" name="noKTP" value="<?php echo $noKTP; ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Saldo</td>
            <td class="pinggir-data"><input type="text" name="saldo" value="<?php echo $saldo; ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Peringkat</td>
            <td class="pinggir-data"><input type="text" name="peringkat" value="<?php echo $peringkat; ?>" size="10"></td>
        </tr>
        <tr>
            <td class="pinggir-data">username</td>
            <td class="pinggir-data"><input type="text" name="usrname" value="<?php echo $usrnameN; ?>" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Password</td>
            <td class="pinggir-data"><input type="text" name="pass" value="<?php echo $passN; ?>" size="20"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" class="head-data"><input type="submit" value="Update"></td>
        </tr>
</table>
</form>
