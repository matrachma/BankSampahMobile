<?php
include "../sampah/link.php";
?>
<form method="post" action="?page=act_input_sampah">
<table width=100% border=1 class="table-data">
    <tr>
        <td class="head-data" colspan="2">Tambah Data Sampah</td>
    </tr>
    <tr>
        <td class="pinggir-data">Kode Sampah</td>
        <td class="pinggir-data"><input type="text" name="kode" size="10"></td>
    </tr>
    <tr>
        <td class="pinggir-data">Kategori</td>
        <td class="pinggir-data"><input type="text" name="kategori" size="20"></td>
    </tr>
    <tr>
        <td class="pinggir-data">Jenis</td>
        <td class="pinggir-data"><input type="text" name="jenis" size="20"></td>
    </tr>
    <tr>
        <td class="pinggir-data">Harga</td>
        <td class="pinggir-data"><input type="text" name="harga" size="20"></td>
    </tr>
    <tr>
        <td colspan="2" align="center" class="head-data"><input type="submit" value="Input"></td>
    </tr>
</table>
</form>
