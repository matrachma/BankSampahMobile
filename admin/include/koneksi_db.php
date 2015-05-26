<?php
//mysql.idhostinger.com
//u842092901_bsmob
//rpl006
//u842092901_bsmob

//$db_host	= "mysql.idhostinger.com";
//$db_user	= "u842092901_bsmob";
//$db_pass	= "rpl006";
//$db_name	= "u842092901_bsmob";

$db_host	= "localhost";
$db_user	= "root";
$db_pass	= "";
$db_name	= "u842092901_bsmob";

$konek	= mysql_connect($db_host,$db_user,$db_pass,$db_name) or die ("Gagal koneksi ke server");
mysql_select_db($db_name, $konek) or die ("Gagal mengaktifkan database".mysql_error());

?>