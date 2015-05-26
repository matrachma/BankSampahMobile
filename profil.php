<?php 
session_start();

$sesi   = $_SESSION['sesi'];
include "konek.php";

if(empty($_SESSION['sesi'])){
    echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='index.html'>login</a> !!</font></center>";
    exit;
}

$query5=mysql_query("SELECT * FROM nasabah WHERE id_N = '$sesi'");
if (!$query5) { // add this check.
    die('Invalid query: ' . mysql_error());
}
?>


<html>
    <head>
        
        <title>Bank Sampah Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.css" />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

    </head>
    <body>

    <div data-role="page" data-theme='b'>
        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <a href="#mypanel" data-role='button' data-inline='true'><i class='lIcon fa fa-bars'></i></a>
            <h1>Profil</h1>
        </div>

        <!-- Script buat panel-->
        <div data-role="panel" data-display="push" id="mypanel" data-theme="b">
            <ul data-role="listview">
                <li>Menu</li>
                <li data-icon='false'><a href="nasabah.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-home'></i>Beranda</a></li>
                <li data-icon='false'><a href="profil.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-user'></i>Profil</a></li>
                <li data-icon='false'><a href="harga.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-calculator'></i>Harga Sampah</a></li>
                <li data-icon='false'><a href="log.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-file-text-o'></i>Log Kegiatan</a></li>
                <li data-icon='false'><a href="info.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-newspaper-o'></i>Informasi</a></li>
                <li data-icon='false'><a href="about.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-trash'></i>Tentang Bank Sampah</a></li>
                <li data-icon='false'><a href="logout.php?user=$sesi" data-ajax="false" onClick="return confirm('Anda yakin ingin Keluar ?')"><i class='lIcon fa fa-sign-out'></i>Logout</a></li>
            </ul>
        </div>

        <!--<div data-role='popup' id='popupDialog' data-theme='b'>
            <div data-role='header' data-theme='b'>
                <h1>Keluar</h1>
            </div>
            <div data-role='content' data-theme='b'>
                <p>Anda yakin ingin Keluar ?</p>
                <div class='showastabs center nobg'>
                       <a href='logout.php?user=$sesi' data-ajax="false" data-rel='back' data-icon='ok' data-iconpos='left' data-role='button' data-inline='true'>Ya</a>
                       <a href='nasabah.php?user=$sesi' data-ajax="false" data-rel='back' data-icon='delete' data-iconpos='left' data-role='button' data-inline='true'>Tidak</a>
                </div>
            </div>
        </div>-->

        <div id='map-canvas'></div>		
	        <ul data-nativedroid-plugin='cards'>
                <li data-cards-type='weather'>
                    <h1>Profil</h1>
                    <h2>Nasabah</h2>
                    <ul class='detail'>
                    <?php
                    $datas = mysql_fetch_array($query5);
                    echo "
                        <li><i class='fa fa-user fa-5x'></i>
                            <span>$datas[nama]</span>
                            <span>$datas[no_rekening]</span>
                        </li>
                        <li>level $datas[peringkat]</li>
                        ";
                    ?>
                    </ul>
                </li>
                <li data-cards-type='sports'>
                    <?php
                    $tanggal=$datas['tanggal_lahir'];
                    $tgl= date('d-m-Y', strtotime($tanggal ));
                    $level=$datas['peringkat'];
                    
                    echo "
					<h1>Saldo       :<span>Rp. $datas[saldo]</span></h1>
                    <h1>Alamat      :<span>$datas[alamat]</span></h1>
                    <h1>No. KTP     :<span>$datas[no_KTP]</span></h1>
                    <h1>TTL         :<span>$datas[tempat_lahir], $tgl</span></h1>";
                    if($level=="1"){
                        echo "<h1>Suku Bunga         :<span>0.5%</span></h1>";
                    } else if($level=="2"){
                        echo "<h1>Suku Bunga         :<span>1.5%</span></h1>";
                    } else if($level=="3"){
                        echo "<h1>Suku Bunga         :<span>2.0%</span></h1>";
                    } else if($level=="4"){
                        echo "<h1>Suku Bunga         :<span>2.5%</span></h1>";
                    } else {
                        echo "<h1>Suku Bunga         :<span>3.0%</span></h1>";
                    } 
                    ?>
				</li>
	        </ul>

        <div data-position="fixed" data-tap-toggle="false" data-role="footer" data-tap-toggle="false" data-theme='b'>
            <div data-role="navbar">
                <ul>
                    <li><a href="nasabah.php?user=$sesi" data-ajax="false"><i class='blIcon fa fa-home'></i>Beranda</a></li>
                    <li><a href="konversi.php?user=$sesi" data-ajax="false"><i class='blIcon fa fa-calculator'></i>Konversi</a></li>
                    <li><a href="logout.php?user=$sesi" data-ajax="false" onClick="return confirm('Anda yakin ingin Keluar ?')"><i class='blIcon fa fa-sign-out'></i>Logout</a></li>
                </ul>
            </div>
        </div>

    </div>
    
    <script src="js/nativedroid.script.js"></script>
    </body>
</html>
