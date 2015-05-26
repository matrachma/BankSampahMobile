<?php
include "../include/koneksi_db.php";
include "../logNasabah/link.php";

$id	= isset($_GET['id']) ? $_GET['id'] : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_sampah.php'>";
} else {
	$query		= mysql_query("SELECT * FROM lognasabah WHERE id_log='$id'", $konek);
	$hasil		= mysql_fetch_array($query);
	$idL  		= $hasil['id_log'];
	$tgl 		= $hasil['tanggal'];
	$akt	      = $hasil['aktivitas'];
	$idN	    = $hasil['id_N'];
    $query1     = mysql_query("SELECT * FROM nasabah WHERE id_N='$idN'", $konek);
	}
?>

<form method="post" action="?page=act_edit_logNasabah">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $idL; ?>">
<tr><td class="head-data" colspan="2">Edit Data Log Nasabah : <?php echo $idL; ?></td></tr>
<tr><td class="pinggir-data">Id Log</td>
<td class="pinggir-data"><input type="text" readonly="readonly" name="id" value="<?php echo $idL; ?>" size="10"></td></tr>
<tr><td class="pinggir-data">Kategori</td>
<td class="pinggir-data"><input type="date" name="tgl" value="<?php echo $tgl; ?>"></td></tr>
<tr><td class="pinggir-data">Aktivitas</td>
<td class="pinggir-data"><input type="text" name="akt" value="<?php echo $akt; ?>" size="120"></td></tr>
<tr><td class="pinggir-data">Id Nasabah</td>
    <td class="pinggir-data">
        <select name="idN" >
            <option value="<?php echo $idN; ?>"><?php echo $idN; ?></option>
            <?php
                $data=mysql_query("SELECT * FROM nasabah");
                if (!$data) { // add this check.
                    die('Invalid query: ' . mysql_error());
                }
                while ($nasabah=mysql_fetch_array($data)){
                    echo "
                            <option value=".$nasabah[id_N]."> $nasabah[nama] $nasabah[no_rekening]</option>";
                }
            ?>
        </select></td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
