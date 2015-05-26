<?php
include "../nasabah/link.php";
?>
<form method="post" action="?page=act_input_nasabah">
    <table width=100% border=1 class="table-data">
        <tr>
            <td class="head-data" colspan="2">Input Data Nasabah</td>
        </tr>
        <tr>
            <td class="pinggir-data">No. Rekening</td>
            <td class="pinggir-data"><input type="text" name="noRek" size="10"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Nama</td>
            <td class="pinggir-data"><input type="text" name="nama" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Alamat</td>
            <td class="pinggir-data"><input type="text" name="alamat" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Tanggal Lahir</td>
            <td class="pinggir-data"><input type="date" name="tgl" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Tempat Lahir</td>
            <td class="pinggir-data"><input type="text" name="tl" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">No. KTP</td>
            <td class="pinggir-data"><input type="text" name="noKTP" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Saldo</td>
            <td class="pinggir-data"><input type="text" name="saldo" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Peringkat</td>
            <td class="pinggir-data"><input type="text" name="peringkat" size="10"></td>
        </tr>
        <tr>
            <td class="pinggir-data">username</td>
            <td class="pinggir-data"><input type="text" name="usrname" size="20"></td>
        </tr>
        <tr>
            <td class="pinggir-data">Password</td>
            <td class="pinggir-data"><input type="text" name="pass" size="20"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" class="head-data"><input type="submit" value="Tambah"></td>
        </tr>
</table>
</form>
