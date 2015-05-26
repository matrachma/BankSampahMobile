<?php
include "../include/koneksi_db.php";
include "../logNasabah/link.php";

?>
<form method="post" action="?page=act_input_logNasabah">
<table width=100% border=1 class="table-data">
<tr><td class="head-data" colspan="2">Tambah Data Log</td></tr>
<tr><td class="pinggir-data">Tanggal</td>
<td class="pinggir-data"><input type="date" name="tgl"></td></tr>
<tr><td class="pinggir-data">Kegiatan</td>
<td class="pinggir-data"><input type="text" name="aktivitas" size="50"></td></tr>
<tr><td class="pinggir-data">Id Nasabah</td>
<td class="pinggir-data"><select name="idN" >
            <option value="0"> --- Pilih Nasabah ---</option>
            <?php
                $data=mysql_query("SELECT * FROM nasabah");
                if (!$data) { // add this check.
                    die('Invalid query: ' . mysql_error());
                }
                while ($nasabah=mysql_fetch_array($data)){
                    echo "
                            <option value=".$nasabah[id_N]."> ($nasabah[id_N]) $nasabah[nama] -- $nasabah[no_rekening]</option>";
                }
            ?>
        </select></td></tr>
<tr><td colspan="2" align="left" class="head-data">
<input type="submit" value="Input">
</td></tr>
</table>
</form>
