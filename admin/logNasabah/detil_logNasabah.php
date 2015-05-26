<?php
include "../include/koneksi_db.php";
include "../logNasabah/link.php";

$id	= isset($_GET['id']) ? $_GET['id'] : "";

$query=mysql_query("SELECT * FROM lognasabah WHERE id_N='$id'", $konek);
$query1=mysql_query("SELECT * FROM nasabah WHERE id_N='$id'", $konek);

$hasil1=mysql_fetch_array($query1);
?>

<table class="table-data" width=100% border=1>
    <tr>
        
            <td class="td-data" colspan="7">
                <?php
            echo "Detail Log Nasabah: <b> $hasil1[nama] $hasil1[no_rekening]</b>";
                ?>
            </td>
    </tr>
    <tr><td class="head-data">Tanggal</td><td class="head-data">Aktivitas</td><td class="head-data">Edit</td></tr>
    <?php
        while($hasil=mysql_fetch_array($query)){
            echo "
                <tr>
                    <td class='td-data'>$hasil[tanggal]</td>
                    <td class='td-data'>$hasil[aktivitas]</td>
                    <td class='td-data'><a href='?page=edit_logNasabah&id=$hasil[id_log]'><img class='img_link' src='../image/order_form_online_offer-512.png' width='15px' height='15px'></a></td>
                </tr>";}
    ?>
</table>