<?php 
session_start();

$sesi   = $_SESSION['sesi'];

if(empty($_SESSION['sesi'])){
    echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='index.html'>login</a> !!</font></center>";
    exit;
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
            <h1>Tentang Kami</h1>
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
        
        <div id='map-canvas'></div>

          
		
	        <ul data-nativedroid-plugin='cards'>
                <li data-cards-type='text'>
                    <h1>Bank Sampah</h1>
                    <p>Berdirinya Bank Sampah Bogor disebabkan atas keprihatinan terhadap lingkungan yang menjadi semakin kumuh akibat terbengkalainya limbah sampah yang tidak langsung di buang.
Berdasarkan keadaan tersebut kami berinisiatif untuk melakukan sesuatu agar dapat mengubah pola pikir masyarakat bahwa sampah dapat digunakan kembali sebagai sumber daya lain yang dapat
bermanfaat bagi semua orang dari aspek ekonomi, kebersihan maupun keindahan. Ide tersebut berkembang menjadi Bank Sampah Bogor.</p>
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