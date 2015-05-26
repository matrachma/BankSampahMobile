<?php
include "../include/koneksi_db.php";
include "../info/link.php";

?>
<form method="post" action="?page=act_input_info">
<table width=100% border=1 class="table-data">
    <tr>
        <td class="head-data" colspan="2">Tambah Data Info</td>
    </tr>
    <tr>
        <td class="pinggir-data">Judul Info</td>
        <td class="pinggir-data"><input type="text" name="jdl" size="20"></td>
    </tr>
    <tr>
        <td class="pinggir-data">Isi</td>
        <td class="pinggir-data"><input type="text" name="isi" size="100"></td>
    </tr>
    <tr>
        <td class="pinggir-data">Tanggal</td>
        <td class="pinggir-data"><input type="date" name="tgl"><!--<select id="idN">
   //
    //    $nasabah = mysql_query("SELECT * FROM nasabah");
   //     if(!$nasabah){
            die('invalid query: ' . mysql_error());
    //    }
    //    while($data=mysql_fetch_array($nasabah)){
    //        echo "
    //        <option value=".$data[id_N]."> $data[no_rekening] $data[nama]</option>";
   //     }
    --> </td>
    </tr>
    <tr>
        <td colspan="2" align="left" class="head-data"><input type="submit" value="Input"></td>
    </tr>
</table>
</form>
